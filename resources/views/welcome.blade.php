<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Font -->
    <script src="{{ asset('js/webfontloader.js') }}"></script>

    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css') }}">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">


</head>

<body class="landing-page">

<div class="content-bg-wrap"></div>

<!-- Header Standard Landing  -->


<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard" style="height: 50px !important;"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
                <h1>Welcome to the Social Network for UPH Alumni</h1>
                <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                </p>
                <a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

            <!-- Login-Registration Form  -->

            <div class="registration-login-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            <object data="{{ asset('svg/notes.svg') }}" class="olymp-register-icon" type="image/svg+xml"></object>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            <object data="{{ asset('svg/login.svg') }}" class="olymp-register-icon" type="image/svg+xml"></object>
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

                    <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
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

            <!-- ... end Login-Registration Form  -->		</div>
    </div>
</div>


<!-- JS Scripts -->
<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('js/jquery.matchHeight.js') }}"></script>
<script src="{{ asset('js/svgxuse.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('js/Headroom.js') }}"></script>
<script src="{{ asset('js/velocity.js') }}"></script>
<script src="{{ asset('js/ScrollMagic.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.js') }}"></script>
<script src="{{ asset('js/selectize.js') }}"></script>
<script src="{{ asset('js/swiper.jquery.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<script src="{{ asset('js/simplecalendar.js') }}"></script>
<script src="{{ asset('js/fullcalendar.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/ajax-pagination.js') }}"></script>
<script src="{{ asset('js/Chart.js') }}"></script>
<script src="{{ asset('js/chartjs-plugin-deferred.js') }}"></script>
<script src="{{ asset('js/circle-progress.js') }}"></script>
<script src="{{ asset('js/loader.js') }}"></script>
<script src="{{ asset('js/run-chart.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/jquery.gifplayer.js') }}"></script>
<script src="{{ asset('js/mediaelement-and-player.js') }}"></script>
<script src="{{ asset('js/mediaelement-playlist-plugin.min.js') }}"></script>

<script src="{{ asset('js/base-init.js') }}"></script>
<script defer src="{{ asset('js/fontawesome-all.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>
</html>
