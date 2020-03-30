<?php

namespace App\Http\Controllers;

use App\Models\Discord_Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Wohali\OAuth2\Client\Provider\Discord;
use Wohali\OAuth2\Client\Provider\Exception\DiscordIdentityProviderException;

class DiscordController extends Controller
{
    /**
     * @var Discord
     */
    private $provider;

    /**
     * @var array
     */
    private $scopes = ['identify'];

    /**
     * Initializes the provider variable.
     */
    protected function initProvider()
    {
        $this->provider = new Discord([
            'clientId' => config('discord.clientId'),
            'clientSecret' => config('discord.clientSecret'),
            'redirectUri' => config('discord.redirectUri'),
        ]);
    }

    /**
     * Link a new account (redirects to Discord login).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (! empty($request->input('code'))) {
            return $this->store($request);
        }

        $this->initProvider();

        $options = [
            'scope' => $this->scopes,
        ];
        $authUrl = $this->provider->getAuthorizationUrl($options);

        session()->put('discordoauth2state', $this->provider->getState());
        session()->save();
        return redirect()->away($authUrl);
    }

    /**
     * Link a new account (handles callback from Discord login).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->initProvider();
        $cid = auth()->user()->id;

        if (empty($request->input('code'))) {
            return redirect()->route('discord.create');
        }

        if (empty($request->input('state')) || ($request->input('state') !== session('discordoauth2state'))) {
            $expects = session('discordoauth2state');
            $receives = $request->input('state', 'None');
            session()->forget('discordoauth2state');

            return redirect()->route('home')->withError(['State Mismatch', 'Please try again. It it still fails, let us know.']);
        }

        try {
            $token = $this->provider->getAccessToken('authorization_code', ['code' => $request->input('code')]);
        } catch (DiscordIdentityProviderException $e) {
            return redirect()->route('discord.create');
        }

        try {
            $user = $this->provider->getResourceOwner($token);
        } catch (Exception $e) {
            return redirect()->route('home')->withError(['Hmmmm...', 'Uh, oh... we\'re having trouble finding your Discord Account']);
        }

        if ( // If the user hasn't granted us the permissions we need, we ignore the token and return an error.
            ! strstr($token->getValues()['scope'], 'identify')
        ) {
            return redirect()->route('home')->withError(['Oops...', 'Something went wrong. Please try again']);
        }

        Discord_Account::where('id', $user->getId())->delete(); //Delete any other records using the same Discord_ID (one CID == one Discord_ID)

        Discord_Account::updateOrCreate([
            'user_id' => $cid,
        ], [
            'id' => $user->getId(),
        ]);

        return redirect()->route('home')->withSuccess(['Aye!', 'Discord account successfully linked']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discord_Account  $discord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discord_Account $discord)
    {
        $request->validate([
            'account_mode' => 'required|integer|in:0,1,2',
        ]);

        $discord->mode = $request->input('account_mode');
        $discord->save();

        return redirect()->route('home')->withSuccess(['No problem!', 'Allow some time for the bot to update your name on Discord']);
    }
}
