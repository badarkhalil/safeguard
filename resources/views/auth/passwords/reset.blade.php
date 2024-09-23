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
                <form method="POST" action="{{ route('password.update') }}" class="login100-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <span class="login100-form-title p-b-43">
                        {{ __('Reset Password') }}
                    </span>
                    @include('Admin.layout.alerts')

                    <!-- Email Input -->
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" id="email" type="email"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

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

                     <!-- Confirm Password Input -->
                     <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password_confirmation') is-invalid @enderror" id="password-confirm" type="password"
                            name="password_confirmation" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Login Button -->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Reset Password') }}
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
