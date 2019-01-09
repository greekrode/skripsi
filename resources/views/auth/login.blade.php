@extends('layouts.default')

@section('title', 'Login')

@section('content')

    <div class="main-header main-header-fullwidth main-header-has-header-standard" style="margin-bottom: 0px !important;">

        <div class="header--standard header--standard-landing" id="header--standard">
            <div class="container">
                <div class="header--standard-wrap">

                    <a href="/" class="logo">
                        <div class="img-wrap">
                            {{--<img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Olympus" width="120">--}}
                            {{--<img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored">--}}
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">alumni uph</h6>
                            <div class="sub-title">SOCIAL NETWORK</div>
                        </div>
                    </a>

                    <div class="nav nav-pills nav1 header-menu">
                        <div class="mCustomScrollbar">
                            <ul>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Profile Page</a>
                                        <a class="dropdown-item" href="#">Newsfeed</a>
                                        <a class="dropdown-item" href="#">Post Versions</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-has-megamenu">
                                    <a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
                                    <div class="dropdown-menu megamenu">
                                        <div class="row">
                                            <div class="col col-sm-3">
                                                <h6 class="column-tittle">Main Links</h6>
                                                <a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                            </div>
                                            <div class="col col-sm-3">
                                                <h6 class="column-tittle">BuddyPress</h6>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                            </div>
                                            <div class="col col-sm-3">
                                                <h6 class="column-tittle">Corporate</h6>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                            </div>
                                            <div class="col col-sm-3">
                                                <h6 class="column-tittle">Forums</h6>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="close-responsive-menu js-close-responsive-menu">
                                    <svg class="olymp-close-icon"><use xlink:href="svg//icons.svg#olymp-close-icon"></use></svg>
                                </li>
                                <li class="nav-item js-expanded-menu">
                                    <a href="#" class="nav-link">
                                        <svg class="olymp-menu-icon"><use xlink:href="svg//icons.svg#olymp-menu-icon"></use></svg>
                                        <svg class="olymp-close-icon"><use xlink:href="svg//icons.svg#olymp-close-icon"></use></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-spacer--standard"></div>

        <div class="content-bg-wrap bg-landing"></div>

        <div class="container">
            <div class="row display-flex">
                <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="landing-content">
                        <h1>The Most Complete Social Network is Here!</h1>
                        <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                            thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
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
                                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                    <svg class="olymp-login-icon"><use xlink:href="svg/icons.svg#olymp-login-icon"></use></svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
                                <div class="title h6">Login to your Account</div>
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
                </div>

                <!-- ... end Login-Registration Form  -->
            </div>
        </div>
    </div>

    <img class="img-bottom" src="img/group-bottom.png" alt="friends">
    <img class="img-rocket" src="img/rocket.png" alt="rocket">
    </div>
@endsection
