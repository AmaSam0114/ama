@extends('layouts.app')
@section('content')
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="fluid-container auth-page password-reset">
    <div class="row vh-100">
        <div class="col-sm-8 greeting-area">
           @include('auth.greeting')
        </div>
        <div class="col-md-4 form-area d-flex align-items justify-center py-5">
            <div class="flex-protect w-100">
                <form class="px-5 w-100">
                    <h2 class="h2 border-bottom">Password Reset</h2>
                    <div class="mb-5"></div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" placeholder="Enter your Email" >
                    </div>
                
                    <button class="btn btn-primary mt-5">Reset</button>
                </form>
                <div class="mb-5"></div>
                <div class="footer-actions  px-5">
                    <ul class="action-list list-inline list-unstyled">
                        @if (Route::has('register'))
                        <li class="list-inline-item"><a href="{{ route('login') }}" class="link">Login</a></li>
                        @endif
                        <li class="list-inline-item"><a href="{{ route('register') }}" class="link"> Request a Service</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
