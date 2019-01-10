@extends('layouts.default')

@section('title', 'Reset Password')

@section('content')

    <div class="main-header main-header-fullwidth main-header-has-header-standard register-header">

        @include('include.header-menu')

        <div class="header-spacer--standard"></div>

        <div class="content-bg-wrap bg-landing"></div>

        <div class="container">
            <div class="row display-flex">
                <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="landing-content">
                        <h1>Forgot your password?</h1>
                        <p>Insert your registered email and check the link to reset your password.
                        </p>
{{--                        <a href="{{ route('register') }}" class="btn btn-md btn-border c-white">Register Now</a>--}}
                    </div>
                </div>

                <div class="col col-xl-5 ml-auto col-lg-6 col-md-12 col-sm-12 col-12">


                    <!-- Login-Registration Form  -->

                    <div class="registration-login-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                    <svg class="olymp-login-icon"><use xlink:href="svg/icons.svg#olymp-login-icon"></use></svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                                <div class="title h6">Reset your password</div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}" class="content">
                                    @csrf
                                    <div class="row">
                                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group label-floating{{ old('email' ?? ' is-empty') }}">
                                                <label class="control-label">Your Email</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                                @endif
                                            </div>

                                            <button type="submit" class="btn btn-lg btn-primary full-width">{{ __('Send Password Reset Link') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Login-Registration Form  -->
                </div>
            </div>
        </div>

        <img class="img-bottom" src="{{ asset('img/group-bottom.png') }}" alt="friends">
        <img class="img-rocket" src="{{ asset('img/rocket.png') }}" alt="rocket">
    </div>
@endsection
