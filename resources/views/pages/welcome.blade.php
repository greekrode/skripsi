@extends('layouts.default')

@section('title', 'Welcome')

@section('content')

<div class="main-header main-header-fullwidth main-header-has-header-standard">

    @include('include.header-menu')
    <div class="header-spacer--standard"></div>

    <div class="content-bg-wrap bg-landing"></div>

    <div class="container">
        <div class="row display-flex">
            <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="landing-content">
                    <h1>Welcome to Alumni UPH Network !</h1>
                    <p>Sign up now and join us in this alumni network. You can contact your fellow alumni and also seek for jobs!</p>
                    <a href="{{ route('register') }}" class="btn btn-md btn-border c-white">Register Now!</a>
                </div>
            </div>

            <div class="col col-xl-5 ml-auto col-lg-6 col-md-12 col-sm-12 col-12">


                <!-- Login-Registration Form  -->

                <div class="registration-login-form">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#home" role="tab">
                                <svg class="olymp-register-icon"><use xlink:href="svg/icons.svg#olymp-register-icon"></use></svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                                <svg class="olymp-login-icon"><use xlink:href="svg/icons.svg#olymp-login-icon"></use></svg>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
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

                <!-- ... end Login-Registration Form  -->
            </div>
        </div>
    </div>

    <img class="img-bottom" src="img/group-bottom.png" alt="friends">
    <img class="img-rocket" src="img/rocket.png" alt="rocket">
</div>

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="img/icon-fly.png" alt="screen">
            </div>

            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">Why Join <span class="c-primary">Alumni UPH</span>?</h2>
                    <p class="heading-text">You can connect with each other to keep in contact. Plus, you can seek for jobs from top company.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">Search and Contact <span class="c-primary"> Our Alumni</span></h2>
                    <p class="heading-text">Search for our best alumni and contact them.</p>
                    <a href="{{ route('user.search') }}" class="btn btn-primary btn-md">Search Now!</a>
                </div>
            </div>

            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="img/image1.png" alt="screen">
            </div>
        </div>
    </div>
</section>


<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="img/image3.png" alt="screen">
            </div>

            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="heading-title">Search for <span class="c-primary"> Job Now</span></h2>
                    <p class="heading-text">Seek for jobs from  top company</p>
                    <a href="{{ route('job.search') }}" class="btn btn-primary btn-md">Search Now!</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Planer Animation -->

<section class="medium-padding120 bg-section3 background-cover planer-animation">
	<div class="container">
		<div class="row mb60">
			<div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading align-center">
					<div class="heading-sup-title">SOCIAL NETWORK</div>
					<h2 class="h1 heading-title">Community Reviews</h2>
					<p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="swiper-container pagination-bottom" data-show-items="3">
				<div class="swiper-wrapper">
                @foreach($topUsers as $topUser)
					<div class="ui-block swiper-slide">

						
						<!-- Testimonial Item -->
						
						<div class="crumina-module crumina-testimonial-item">
							<div class="testimonial-header-thumb"></div>
						
							<div class="testimonial-item-content">
						
								<div class="author-thumb">
                                    <img src="{{ $topUser->profile_image ? '/uploads/'.$topUser->profile_image : 'https://via.placeholder.com/124.png?text=Profile' }}" alt="author" width="100">
								</div>
						
								<h3 class="testimonial-title">{{ $topUser->first_name.' '.$topUser->last_name }}</h3>
						
								<ul class="rait-stars">
                                    Points: {{ $topUser->point }}
                                </ul>
						
								<p class="testimonial-message">{{ $topUser->about ? $topUser->about : ' '}}
								</p>
						
								<div class="author-content">
                                    <a href="mailto:{{ $topUser->email }}" class="h6 author-name">{{ $topUser->email }}</a>
                                    <div class="country">{{ $topUser->city.', '.$topUser->country }}</div>
                                </div>
							</div>
						</div>
						
						<!-- ... end Testimonial Item -->
					</div>
                @endforeach
				</div>

				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>

	<img src="img/planer.png" alt="planer" class="planer">
</section>

<!-- ... end Section Planer Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Join with us now!</a>
            </div>
        </div>
    </div>
    <img class="first-img" alt="guy" src="{{ asset('img/guy.png') }}">
    <img class="second-img" alt="rocket" src="{{ asset('img/rocket1.png') }}">
    <div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
    <div class="modal-dialog window-popup registration-login-form-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg//icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <div class="registration-login-form">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                <svg class="olymp-login-icon">
                                    <use xlink:href="svg//icons.svg#olymp-login-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                <svg class="olymp-register-icon">
                                    <use xlink:href="svg//icons.svg#olymp-register-icon"></use>
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
                                            <input name="datetimepicker" value="10/24/1984" />
                                            <span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="svg//icons.svg#olymp-calendar-icon"></use></svg>
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
                                            <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!
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
    <img src="svg/back-to-top.svg" alt="arrow" class="back-icon">
</a>


@endsection
