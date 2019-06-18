@extends('layouts.default')

@section('title', 'Register')

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
                                                <input name="datetimepicker" id="birthday" value="{{ date_format(today(), 'd/m/Y') }}" class="datetimepicker" required/>
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
                                                <label class="control-label">Role</label>
                                                <select class="selectpicker form-control" name="type" id="type" onchange="genderHide(this)">
                                                    <option value="user">Student</option>
                                                    <option value="company">Company</option>
                                                </select>

                                                @if ($errors->has('type'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('type') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group label-floating is-select ">
                                                <label class="control-label">Your Gender</label>
                                                <select class="selectpicker form-control" name="gender" id="gender">
                                                    <option></option>
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

        <img class="img-bottom" src="{{ asset('img/group-bottom.png') }}" alt="friends">
        <img class="img-rocket" src="{{ asset('img/rocket.png') }}" alt="rocket">
    </div>

    <script>
        function genderHide()
        {
            if ($('#type').val() === 'company') {
                $('.gender-div').hide("slow");
            } else {
                $('.gender-div').show("slow");
            }
        }
    </script>
@endsection
