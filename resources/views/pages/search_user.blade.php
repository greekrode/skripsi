@extends('layouts.default')

@section('title', 'Search')

@section('content')
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

    @include('include.header-menu')

    <div class="header-spacer--standard"></div>

    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Users</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="#">Home</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>Users</span>
            </li>
        </ul>
    </div>

    <div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section class="medium-padding100">
    <div class="container">
        <div class="row mb60">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12  m-auto">
                <div class="crumina-module crumina-heading align-center">
                    <div class="heading-sup-title">Our Alumni</div>
                    <h2 class="heading-title">Latest Users</h2>
                    <p class="heading-text">Any question to ask? Please email us at:
                        <a href="mailto:admin@skripsi.com">admin@skripsi.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12  m-auto">


                <ul class="table-careers">
                    <li class="head">
                        <span>FULL NAME</span>
                        <span>FACULTY</span>
                        <span>MAJOR</span>
                        <span>LOCATION</span>
                        <span></span>
                    </li>

                    @foreach ($users as $user)
                    <li>
                        <span class="date">{{ $user->first_name.' '.$user->last_name }}</span>
                        <span class="position bold">{{ $user->faculty ? $user->faculty->name :'' }}</span>
                        <span class="type bold">{{ $user->major ? $user->major->name : ''}}</span>
                        <span class="town-place">{{ $user->city.', '.$user->country}}</span>
                        <span>
                            <a href="mailto:{{ $user->email }}" class="btn btn-primary btn-sm full-width" target="_blank">Contact Now!</a>
                        </span>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="medium-padding180 bg-section5 background-cover"></section>

<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Start Making Friends Now!</a>
            </div>
        </div>
    </div>
    <img class="first-img" alt="guy" src="{{ asset('img/guy.png') }}">
    <img class="second-img" alt="rocket" src="{{ asset('img/rocket.png') }}">
    <div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
    <div class="modal-dialog window-popup registration-login-form-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <div class="registration-login-form">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                <svg class="olymp-login-icon">
                                    <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-login-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                <svg class="olymp-register-icon">
                                    <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-register-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
                            <div class="title h6">Register to Olympus</div>
                            <form class="content">
                                <div class="row">
                                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">First Name</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Last Name</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Your Email</label>
                                            <input class="form-control" placeholder="" type="email">
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Your Password</label>
                                            <input class="form-control" placeholder="" type="password">
                                        </div>

                                        <div class="form-group date-time-picker label-floating">
                                            <label class="control-label">Your Birthday</label>
                                            <input name="datetimepicker" value="10/24/1984" class="datetimepicker"/>
                                            <span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-calendar-icon"></use></svg>
										</span>
                                        </div>

                                        <div class="form-group label-floating is-select">
                                            <label class="control-label">Your Gender</label>
                                            <select class="selectpicker form-control">
                                                <option value="MA">Male</option>
                                                <option value="FE">Female</option>
                                            </select>
                                        </div>

                                        <div class="remember">
                                            <div class="checkbox">
                                                <label>
                                                    <input name="optionsCheckboxes" type="checkbox">
                                                    I accept the <a href="#">Terms and Conditions</a> of the website
                                                </label>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
                            <div class="title h6">Login to your Account</div>
                            <form class="content">
                                <div class="row">
                                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Your Email</label>
                                            <input class="form-control" placeholder="" type="email">
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Your Password</label>
                                            <input class="form-control" placeholder="" type="password">
                                        </div>

                                        <div class="remember">

                                            <div class="checkbox">
                                                <label>
                                                    <input name="optionsCheckboxes" type="checkbox">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="#" class="forgot">Forgot my Password</a>
                                        </div>

                                        <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                                        <div class="or"></div>

                                        <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                                        <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                                        <p>Don’t you have an account?
                                            <a href="{{ route('register') }}">Register Now!</a> it’s really simple and you can start enjoing all the benefits!
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')


<a class="back-to-top" href="#">
    <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
</a>

@endsection
