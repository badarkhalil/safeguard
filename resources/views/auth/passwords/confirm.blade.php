<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fairkauf Dein PKW - Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/website/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('logincss/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('logincss/main.css') }}">
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('password.confirm') }}" class="login100-form">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        {{ __('Confirm Password') }}
                    </span>
                    <p class="f-16">{{ __('Please confirm your password before continuing.') }}</p>
                    @include('Admin.layout.alerts')

                    <!-- Password Input -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password"
                            name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- Remember Me and Forgot Password -->
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">

                        </div>
                        <div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="txt1">
                                Forgot Password?
                            </a>
                            @endif
                        </div>
                    </div>
                    <!-- Login Button -->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Confirm Password') }}
                        </button>
                    </div>
                </form>

                <!-- Right Side Background Image -->
                <div class="login100-more" style="background-image: url('{{asset('Car.webp')}}');">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>








<title>Admin Dashboard</title>

    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('admin/node_modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/gaxon-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/lite-style-1.min.css')}}">


    <div class="dt-root">

        <!-- Login Container -->
        <div class="dt-login--container dt-app-login--container">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Background Section -->
                <div class="dt-login__bg-section">

                    <div class="dt-login__bg-content">
                        <!-- Login Title -->
                        <h1 class="dt-login__title">{{ __('Confirm Password') }}</h1>
                        <!-- /login title -->

                        <p class="f-16">{{ __('Please confirm your password before continuing.') }}</p>


                    </div>




                </div>
                <!-- /login background section -->

                <!-- Login Content Section -->
                <div class="dt-login__content">

                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">

                        <!-- Form -->
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <!-- Form Group -->
                            <div class="form-group">
                                <label class="sr-only" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif

                            </div>
                            <!-- /form group -->
                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->

    </div>
    <!-- /root -->

<script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/node_modules/moment/moment.js')}}"></script>
<script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('admin/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>
<script src="{{asset('admin/assets/js/script.js')}}"></script>








