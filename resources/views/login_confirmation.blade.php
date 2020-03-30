<!DOCTYPE html>
<html>
    <head>
        <style>
            body, html {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                width: 100%;
                margin: 0;
                padding: 0;
                background: url(https://www.vatsim.eu/assets/images/plane_main.jpg) no-repeat center center;
                background-size: cover;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            }

            .overlay {
                width: 100%;
                display: flex;
                align-self: stretch;
                align-items: center;
                justify-content: center;
                background-color: rgba(41, 39, 34, 0.75);
            }
            .infobox {
                background-color: rgba(255, 255, 255, 1);
                padding: 2rem;
                max-width: 30%;
                text-align: center;
            }
            img.logo {
                width: auto;
                height: auto;
                max-width: 80%;
                margin: 0;
            }
            p {
                margin-top: 15px;
                margin-bottom: 15px;
            }
            .login {
                color: #fff;
                background-color:#5cb85c;
                border-color:#4cae4c;
                display: block;
                margin: 0;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                padding: 10px 30px;
                margin-top: 10px;
                font-size: 15px;
                font-weight: bold;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-decoration: none;
            }
            .login-old {
                border-color:#4cae4c;
                display: inline-block;
                margin-top: 2px;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                font-size: 10px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
        </style>
    </head>
    <body>
        <div class="overlay">
            <div class="infobox">
                <a href="{{ config('app.url') }}"><img class="logo" src="{{ asset('assets/images/vateur.png') }}" alt="VATEUR"></a>
                <p>
                    VATEUR is trialing use of VATSIM Connect for authentication.
                    This is similar to SSO, but allows you to select specific data to share with us.
                    Please let us know if you encounter any issues. Click "Login" below if you wish to continue.
                </p>
                <a href="{{ $authorizationUrl }}" class="login">LOGIN</a>
                <a href="{{ route('auth.login.old') }}" class="login-old">I prefer to use the old system</a>
            </div>
        </div>
    </body>
</html>