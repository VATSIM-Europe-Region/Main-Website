<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\AfvApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Vatsim\OAuth\SSO;

/**
 * This controller handles authenticating users for the application and
 * redirecting them to your home screen. The controller uses a trait
 * to conveniently provide its functionality to your applications.
 */
class SSOLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $sso;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');

        $this->sso = new SSO(
            config('vatsim-sso.base'),
            config('vatsim-sso.key'),
            config('vatsim-sso.secret'),
            config('vatsim-sso.method'),
            config('vatsim-sso.cert')
        );
    }

    public function login(Request $request)
    {
        return $this->sso->login(route('auth.login.old.verify'), function ($key, $secret, $url) use ($request) {
            $request->session()->put('vatsimauth', compact('key', 'secret'));

            return redirect($url);
        }, function ($error) {
            Log::error('SSO Login Error - '.$error->getMessage());

            return redirect()->route('home')->withError(['Login failed', $error->getMessage()]);
        });
    }

    public function verifyLogin(Request $request)
    {
        $session = $request->session()->get('vatsimauth');

        return $this->sso->validate(
            $session['key'],
            $session['secret'],
            $request->input('oauth_verifier'),
            function ($user) use ($request) {
                //dd($user);
                $request->session()->forget('vatsimauth');
                $this->completeLogin($user);
                return redirect()->intended(route('home'));
            },
            function ($error) use ($request) {
                Log::error('SSO Validation Error - '.$error->getMessage());

                return redirect()->route('home')->withError(['Login failed', $error->getMessage()]);
            }
        );
    }

    public function completeLogin($user)
    {
        $account = User::firstOrNew(['id' => $user->id]);

        $account->name_first = utf8_decode($user->name_first);
        $account->name_last = utf8_decode($user->name_last);
        $account->atc_rating = $user->rating->short;
        $account->save();

        auth()->login($account, false); // Do not remember
    }

    public function logout()
    {
        auth()->logout();

        return redirect(route('home'))->withSuccess(['Logout', 'You have been successfully logged out']);
    }
}
