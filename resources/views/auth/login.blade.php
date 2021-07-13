@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<div>A</div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<section class="fluid-container auth-page login">
    <div class="row vh-100">
        <div class="col-sm-8 greeting-area">
            @include('auth.greeting')
        </div>
        <div class="col-md-4 form-area d-flex align-items justify-center">
            <div class="flex-protect w-100">
                <form class="px-5 w-100" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2 class="h2 border-bottom">Login</h2>
                    <div class="mb-5"></div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input  placeholder="Enter your Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input  placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Login</button>
                </form>
                <div class="mb-5"></div>
                <div class="footer-actions  px-5">
                    <ul class="action-list list-inline list-unstyled">
                        <li class="list-inline-item"><a href="{{ route('password.reset', ["token" =>"12345678"]) }}" class="link"> Password Reset</a></li>
                        @if (Route::has('register'))
                        <li class="list-inline-item"><a href="{{ route('register') }}" class="link">Request a Service</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
