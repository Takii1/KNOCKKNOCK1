<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="/assets/PNG's/knock_mini.png">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/loginAssets/style2.css')}}" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>@lang('public.Sign in & Sign up Form')</title>
</head>

<body>

    <div class="backtbn">
        <a class="b-btn" href="{{route('Home')}}"><i class="fa-solid fa-arrow-left"></i>@lang('public.Back')</a></div>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Log in Form -->
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                    <h2 class="title">@lang('public.Sign in')</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="@lang('public.Username')" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="@lang('public.Password')" name="password"/>
                    </div>
                    <input type="submit" value="Login" class="btn solid btn-primary" />
                    @if (Route::has('password.request'))
                     <a class="checkbox" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <p class="social-text">@lang('public.Or Sign in with social platforms')</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{route('google.login')}}" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <!-- Sign Up Form -->
                <form action="{{ route('register') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">@lang('public.Sign up')</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="@lang('public.Username')" name="name"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="@lang('public.Email')" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="@lang('public.Password')" name="password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="@lang('public.Confirm-Password')" name="password_confirmation" required />
                    </div>
                    <input type="submit" class="btn btn-primary" value="Sign up" />

                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <p class="social-text">@lang('public.Or Sign up with social platforms')</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>@lang('public.New here ?')</h3>
                    <p>
                        @lang('public.Sign out of past...Login to the New!')
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        @lang('public.Sign up')
            </button>
                </div>
                <img src="{{asset('/assetsFrontEnd/loginAssets/img/log.svg')}}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>@lang('public.One of us ?')</h3>
                    <p>
                        @lang('public.1. Introduction')Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        @lang('public.Sign in')
            </button>
                </div>
                <img src="{{asset('/assetsFrontEnd/loginAssets/img/register.svg')}}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{asset('/assetsFrontEnd/loginAssets/app.js')}}"></script>
    </body>

</html>
