<?php
/*
 * DO NOT PUBLISH THE KEY, SECRET AND CERT TO CODE REPOSITORIES
 * FOR SECURITY. PLEASE USE LARAVEL'S .envFILES TO PROTECT
 * SENSITIVE DATA.
 * http://laravel.com/docs/master/configuration#environment-configuration
 *
 * Some sensible defaults have been provided so you can use .env files by adding
 * `SSO_KEY`, `SSO_SECRET`, and `SSO_CERT` to your `.env` (production).
 *
 * NOTE THAT THE `SSO_CERT` MUST BE ON ONE LINE IN `.env`: use `SSO_CERT="[private key]"`, replace line breaks with `\n`
 *
 * Modify the three constants below to match the keys in your .env, otherwise it will use what you enter
 * on the second line of the key/secret/cert elements
 */

return [

    /*
     * The location of the VATSIM OAuth interface
     */
    'base' => env('VATSIM_OAUTH_BASE', 'https://auth.vatsim.net'),

    /*
     * The consumer key for your organisation (provided by VATSIM)
     */
    'id' => env('VATSIM_OAUTH_CLIENT'),

    /*
    * The secret key for your organisation (provided by VATSIM)
    * Do not give this to anyone else or display it to your users. It must be kept server-side
    */
    'secret' => env('VATSIM_OAUTH_SECRET'),

];
