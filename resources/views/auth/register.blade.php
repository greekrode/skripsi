@extends('layouts.default')

@section('title', 'Register')

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
                        <a href="{{ route('login') }}" class="btn btn-md btn-border c-white">Log In</a>
                    </div>
                </div>

                <div class="col col-xl-5 ml-auto col-lg-6 col-md-12 col-sm-12 col-12">


                    <!-- Login-Registration Form  -->

                    <div class="registration-login-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                    <svg class="olymp-register-icon"><use xlink:href="svg/icons.svg#olymp-register-icon"></use></svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                                <div class="title h6">Register to AlumniUPH</div>
                                <form method="POST" action="{{ route('register') }}" class="content">
                                    @csrf
                                    <div class="row">
                                        <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">First Name</label>
                                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Last Name</label>
                                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Email</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Password Confirmation</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>

                                            <div class="form-group date-time-picker label-floating">
                                                <label class="control-label">Your Birthday</label>
                                                <input name="datetimepicker" id="birthday" value="{{ date_format(today(), 'd/m/Y') }}" required/>
                                                <span class="input-group-addon">
                                            <i class="fa fa-calendar-alt"></i>
                                        </span>

                                                @if ($errors->has('datetimepicker'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('datetimepicker') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group label-floating is-select">
                                                <label class="control-label">Your Gender</label>
                                                <select class="selectpicker form-control" name="gender" id="gender" required>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                </select>

                                                @if ($errors->has('gender'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            {{--<div class="remember">--}}
                                            {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                            {{--<input name="options" type="checkbox" id="options" required>--}}
                                            {{--I accept the <a href="#">Terms and Conditions</a> of the website--}}
                                            {{--</label>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}

                                            <button type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
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

        <img class="img-bottom" src="img/group-bottom.png" alt="friends">
        <img class="img-rocket" src="img/rocket.png" alt="rocket">
    </div>
@endsection
