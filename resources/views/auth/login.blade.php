@extends('layouts.default')

@section('title', 'Login')

@section('content')

    <div class="main-header main-header-fullwidth main-header-has-header-standard register-header">

        @include('include.header-menu')

        <div class="header-spacer--standard"></div>

        <div class="content-bg-wrap bg-landing"></div>

        <div class="container">
            <div class="row display-flex">
                <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="landing-content">
                        <h1>Welcome to Alumni UPH Network !</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis risus ut tellus congue euismod.
                            In id ligula eu ipsum pulvinar eleifend sed nec turpis. Donec ullamcorper arcu non dignissim hendrerit.
                            Etiam nunc ante, fringilla eu fringilla at, consequat ut lacus. Cras est elit, laoreet nec hendrerit ut, vehicula at quam.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-md btn-border c-white">Register Now</a>
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
                                <div class="title h6">Login to your account</div>
                                <form method="POST" action="{{ route('login') }}" class="content">
                                    @csrf
                                    <div class="row">
                                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Email</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Password</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                                @endif
                                            </div>

                                            <div class="remember">

                                                <div class="checkbox">
                                                    <label>
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        Remember Me
                                                    </label>
                                                </div>
                                                <a class="forgot" href="{{ route('password.request') }}">Forgot my Password</a>
                                            </div>

                                            <button type="submit" class="btn btn-lg btn-primary full-width">Login</button>

                                            {{--<div class="or"></div>--}}

                                            {{--<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>--}}

                                            {{--<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>--}}
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
