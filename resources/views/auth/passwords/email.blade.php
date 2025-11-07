<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true"
    data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<title>{{ config('app.name') }}</title>

<head>
    @include('layouts.partials.headerscript')
    <style>
        .logo-icon,
        .logo-icon b {
            font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
        }

    </style>
</head>

<body class="login-page" style="min-height: 434.433px;">
    <div class="login-box">
        <div class="login-logo">
            <a href="#" class="logo-icon"><b class='text-uppercase'>{{ __('Reset Password') }}</b></a>
        </div>

        <div class="card card-outline card-info">

            <div class="card-body login-card-body">


                <div class="p-2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="input-group mb-1">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-mb-8 offset-1">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                            <div class="col-mb-2 offset-1">
                                <a href="{{ route('login') }}" class="btn btn-primary text-light">
                                    Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</body>

@include('layouts.partials.footerscript')

</html>
