<?php

namespace App\Models;

use App\Http\Controllers\VatsimOAuthController;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use League\OAuth2\Client\Token\AccessToken;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Allow all attributes to be mass assigned.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function discord()
    {
        return $this->hasOne(Discord_Account::class);
    }

    public function getFullNameAttribute()
    {
        return $this->name_first.' '.$this->name_last;
    }

    public function getTokenAttribute()
    {
        if ($this->access_token === null) return null;
        else {
            $token = new AccessToken([
                'access_token' => $this->access_token,
                'refresh_token' => $this->refresh_token,
                'expires' => $this->token_expires,
            ]);

            if ($token->hasExpired()) {
                $token = VatsimOAuthController::updateToken($token);
            }

            // Can't put it inside the "if token expired"; $this is null there
            // but anyway Laravel will only update if any changes have been made.
            $this->update([
                'access_token' => ($token) ? $token->getToken() : null,
                'refresh_token' => ($token) ? $token->getRefreshToken() : null,
                'token_expires' => ($token) ? $token->getExpires() : null,
            ]);

            return $token;
        }
    }
}