<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use League\OAuth2\Client\Token;
use App\Http\Controllers\Controller;
use App\Http\Controllers\VatsimOAuthController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

/**
 * This controller handles authenticating users for the application and
 * redirecting them to your home screen. The controller uses a trait
 * to conveniently provide its functionality to your applications.
 */
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $provider;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->provider = new VatsimOAuthController();
    }

    public function login(Request $request)
    {
        if (! $request->has('code') || ! $request->has('state') || $request->input('state') !== session()->pull('vatsimauthstate')) {
            $authorizationUrl = $this->provider->getAuthorizationUrl(); // Generates state
            $request->session()->put('vatsimauthstate', $this->provider->getState());
            return view('login_confirmation', compact('authorizationUrl'));
			// return redirect()->away($authorizationUrl);
        } else {
            return $this->verifyLogin($request);
        }
    }

    protected function verifyLogin(Request $request)
    {
        try {
            $accessToken = $this->provider->getAccessToken('authorization_code', [
                'code' => $request->input('code')
            ]);
        } catch (IdentityProviderException $e) {
            return redirect()->route('home')->withError(["Oops", "Something went wrong, please try again later."]);
        }
        $resourceOwner = array_to_obj($this->provider->getResourceOwner($accessToken)->toArray());

        if (!
            (isset($resourceOwner->data) &&
	    isset($resourceOwner->data->cid) &&
            isset($resourceOwner->data->personal->name_first) &&
            isset($resourceOwner->data->personal->name_last) &&
            isset($resourceOwner->data->vatsim->rating->short) &&
            $resourceOwner->data->oauth->token_valid === "true")
        ) {
            return redirect()->route('home')->withError(["Uh, oh...", "We need you to grant us all marked permissions"]);
        }

        $this->completeLogin($resourceOwner, $accessToken);

        return redirect()->intended(route('home'))->withSuccess(['Login Successful', null]);
    }

    protected function completeLogin($resourceOwner, $token)
    {
        $account = User::firstOrNew(['id' => $resourceOwner->data->cid]);
        $account->name_first = utf8_decode($resourceOwner->data->personal->name_first);
        $account->name_last = utf8_decode($resourceOwner->data->personal->name_last);
        $account->atc_rating = $resourceOwner->data->vatsim->rating->short;
        if ($resourceOwner->data->oauth->token_valid) { // User has given us permanent access to updated data
            $account->access_token = $token->getToken();
            $account->refresh_token = $token->getRefreshToken();
            $account->token_expires = $token->getExpires();
        }

        $account->save();
        auth()->login($account, false); // Do not remember
    }

    public function logout()
    {
        auth()->logout();

        return redirect(route('home'))->withSuccess(['Logout', 'You have been successfully logged out']);
    }
}
