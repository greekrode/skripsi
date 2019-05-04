@extends('layouts.default')

@section('title', 'Search')

@section('content')
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

    @include('include.header-menu')

    <div class="header-spacer--standard"></div>

    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Jobs</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="#">Home</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>Jobs</span>
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
                    <div class="heading-sup-title">SHAPE YOUR FUTURE</div>
                    <h2 class="heading-title">Open Jobs</h2>
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
                        <span>DATE POSTED</span>
                        <span>POSITION</span>
                        <span style="margin-left: -10px !important;">SENIORITY</span>
                        <span>TYPE</span>
                        <span>PLACE</span>
                        <span></span>
                    </li>

                    @foreach ($jobs as $job)
                        <li>
                            <span class="date">{{ date_format($job->created_at,'M jS, Y') }}</span>
                            <span class="position bold">{{ $job->title }}</span>
                            <span class="type bold">{{ $job->seniority->name }}</span>
                            <span class="type bold">{{ $job->type->name }}</span>
                            <span class="town-place">{{ $job->city.', '. $job->country }}</span>
                            <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#registration-login-form-popup">Apply Now!</a></span>
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
                <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">Register Now!</a>
            </div>
        </div>
    </div>
    <img class="first-img" alt="guy" src="img/guy.png">
    <img class="second-img" alt="rocket" src="img/rocket1.png">
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
                            <div class="title h6">Register to AlumniUPH</div>
                            <form method="POST" action="{{ route('register') }}" class="content">
                                @csrf
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

                                        <button type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
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


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-6 col-6">


                <!-- Widget About -->

                <div class="widget w-about">

                    <a href="02-ProfilePage.html" class="logo">
                        <div class="img-wrap">
                            <img src="img/logo-colored.png" alt="Olympus">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">olympus</h6>
                            <div class="sub-title">SOCIAL NETWORK</div>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
                    <ul class="socials">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- ... end Widget About -->

            </div>

            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">


                <!-- Widget List -->

                <div class="widget w-list">
                    <h6 class="title">Main Links</h6>
                    <ul>
                        <li>
                            <a href="#">Landing</a>
                        </li>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </div>

                <!-- ... end Widget List -->

            </div>
            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">


                <div class="widget w-list">
                    <h6 class="title">Your Profile</h6>
                    <ul>
                        <li>
                            <a href="#">Main Page</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Friends</a>
                        </li>
                        <li>
                            <a href="#">Photos</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">


                <div class="widget w-list">
                    <h6 class="title">Features</h6>
                    <ul>
                        <li>
                            <a href="#">Newsfeed</a>
                        </li>
                        <li>
                            <a href="#">Post Versions</a>
                        </li>
                        <li>
                            <a href="#">Messages</a>
                        </li>
                        <li>
                            <a href="#">Friend Groups</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">


                <div class="widget w-list">
                    <h6 class="title">Olympus</h6>
                    <ul>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Forums</a>
                        </li>
                        <li>
                            <a href="#">Statistics</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                <!-- SUB Footer -->

                <div class="sub-footer-copyright">
					<span>
						Copyright <a href="{{ route('welcome') }}">AlumniUPH</a> All Rights Reserved 2019
					</span>
                </div>

                <!-- ... end SUB Footer -->

            </div>
        </div>
    </div>
</div>

<!-- ... end Footer Full Width -->


<a class="back-to-top" href="#">
    <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
</a>




@endsection
