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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis risus ut tellus congue euismod.
                        In id ligula eu ipsum pulvinar eleifend sed nec turpis. Donec ullamcorper arcu non dignissim hendrerit.
                        Etiam nunc ante, fringilla eu fringilla at, consequat ut lacus. Cras est elit, laoreet nec hendrerit ut, vehicula at quam.
                    </p>
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
                    <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa.
                    </p>
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
                    {{--<p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.--}}
                        {{--Excepteur sint occaecat cupidatat non proident, sunt in culpa.--}}
                    {{--</p>--}}
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
{{--                    <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.--}}
{{--                        Excepteur sint occaecat cupidatat non proident, sunt in culpa.--}}
{{--                    </p>--}}
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
                    <div class="heading-sup-title">Featured Users</div>
                    <h2 class="h1 heading-title">Most Awarded Users</h2>
                    <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper-container pagination-bottom" data-show-items="3">
                <div class="swiper-wrapper">
                    <div class="ui-block swiper-slide">


                        <!-- Testimonial Item -->

                        <div class="crumina-module crumina-testimonial-item">
                            <div class="testimonial-header-thumb"></div>

                            <div class="testimonial-item-content">

                                <div class="author-thumb">
                                    <img src="img/avatar3.jpg" alt="author">
                                </div>

                                <h3 class="testimonial-title">Amazing Community</h3>

                                <ul class="rait-stars">
                                    <li>
                                        <i class="fa fa-star star-icon"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star star-icon"></i>
                                    </li>

                                    <li>
                                        <i class="fa fa-star star-icon"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star star-icon"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star star-icon"></i>
                                    </li>
                                </ul>

                                <p class="testimonial-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.
                                </p>

                                <div class="author-content">
                                    <a href="#" class="h6 author-name">Mathilda Brinker</a>
                                    <div class="country">Los Angeles, CA</div>
                                </div>
                            </div>
                        </div>

                        <!-- ... end Testimonial Item -->
                    </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <img src="img/planer.png" alt="planer" class="planer">
</section>

<!-- ... end Section Planer Animation -->

<section class="medium-padding120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="img/image4.png" alt="screen">
            </div>

            <div class="col col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading">
                    <h2 class="h1 heading-title">Release all the Power with the <span class="c-primary">Olympus App!</span></h2>
                    <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>


                <ul class="list--styled">
                    <li>
                        <i class="far fa-check-circle" aria-hidden="true"></i>
                        Build your profile in just minutes, it’s that simple!
                    </li>
                    <li>
                        <i class="far fa-check-circle" aria-hidden="true"></i>
                        Unlimited messaging with the best interface.
                    </li>
                </ul>

                <a href="#" class="btn btn-market">
                    <img class="icon" src="svg/apple-logotype.svg" alt="app store">
                    <div class="text">
                        <span class="sup-title">AVAILABLE ON THE</span>
                        <span class="title">App Store</span>
                    </div>
                </a>

                <a href="#" class="btn btn-market">
                    <img class="icon" src="svg/google-play.svg" alt="google">
                    <div class="text">
                        <span class="sup-title">ANDROID APP ON</span>
                        <span class="title">Google Play</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Section Subscribe Animation -->

<section class="medium-padding100 subscribe-animation scrollme bg-users">
    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading c-white custom-color">
                    <h2 class="h1 heading-title">Olympus Newsletter</h2>
                    <p class="heading-text">Subscribe to be the first one to know about updates, new features and much more!
                    </p>
                </div>


                <!-- Subscribe Form  -->

                <form class="form-inline subscribe-form" method="post">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Enter your email</label>
                        <input class="form-control bg-white" placeholder="" type="email">
                    </div>

                    <button class="btn btn-blue btn-lg">Send</button>
                </form>

                <!-- ... end Subscribe Form  -->

            </div>
        </div>

        <img src="img/paper-plane.png" alt="plane" class="plane">
    </div>
</section>

<!-- ... end Section Subscribe Animation -->
<section class="medium-padding120">
    <div class="container">
        <div class="row mb60">
            <div class="col col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-12">
                <div class="crumina-module crumina-heading align-center">
                    <div class="heading-sup-title">OLYMPUS BLOG</div>
                    <h2 class="h1 heading-title">Latest News</h2>
                    <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb">
                        <img src="img/post1.jpg" alt="photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
                        <a href="#" class="h4 post-title">Here’s the Featured Urban photo of August! </a>
                        <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                        <div class="author-date">
                            by
                            <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                            <div class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    - 7 hours ago
                                </time>
                            </div>
                        </div>

                        <div class="post-additional-info inline-items">

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat27.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat2.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                            <div class="names-people-likes">
                                26
                            </div>

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="svg//icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>0</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb">
                        <img src="img/post2.jpg" alt="photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-primary">OLYMPUS NEWS</a>
                        <a href="#" class="h4 post-title">Olympus Network added new photo filters!</a>
                        <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                        <div class="author-date">
                            by
                            <a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
                            <div class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    - 12 hours ago
                                </time>
                            </div>
                        </div>

                        <div class="post-additional-info inline-items">

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat4.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat26.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat16.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                            <div class="names-people-likes">
                                82
                            </div>

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="svg//icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>14</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                <!-- Post -->

                <article class="hentry blog-post">

                    <div class="post-thumb">
                        <img src="img/post3.jpg" alt="photo">
                    </div>

                    <div class="post-content">
                        <a href="#" class="post-category bg-purple">INSPIRATION</a>
                        <a href="#" class="h4 post-title">Take a look at these truly awesome worspaces</a>
                        <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                        <div class="author-date">
                            by
                            <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                            <div class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    - 2 days ago
                                </time>
                            </div>
                        </div>

                        <div class="post-additional-info inline-items">

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat28.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                            <div class="names-people-likes">
                                0
                            </div>

                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon"><use xlink:href="svg//icons.svg#olymp-speech-balloon-icon"></use></svg>
                                    <span>22</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </article>

                <!-- ... end Post -->
            </div>
        </div>
    </div>
</section>


<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
                <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">Start Making Friends Now!</a>
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
                            <h6 class="logo-title">Alumni UPH</h6>
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
						Copyright. All Rights Reserved 2019
					</span>
                </div>

                <!-- ... end SUB Footer -->

            </div>
        </div>
    </div>
</div>

<!-- ... end Footer Full Width -->




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

    <div class="modal-content">
        <div class="modal-header">
            <span class="icon-status online"></span>
            <h6 class="title" >Chat</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg//icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete js-chat-open"><use xlink:href="svg//icons.svg#olymp-little-delete"></use></svg>
            </div>
        </div>
        <div class="modal-body">
            <div class="mCustomScrollbar">
                <ul class="notification-list chat-message chat-message-field">
                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Don’t worry Mathilda!</span>
                            <span class="chat-message-item">I already bought everything</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                        </div>
                    </li>
                </ul>
            </div>

            <form class="need-validation">

                <div class="form-group label-floating is-empty">
                    <label class="control-label">Press enter to post...</label>
                    <textarea class="form-control" placeholder=""></textarea>
                    <div class="add-options-message">
                        <a href="#" class="options-message">
                            <svg class="olymp-computer-icon"><use xlink:href="svg//icons.svg#olymp-computer-icon"></use></svg>
                        </a>
                        <div class="options-message smile-block">

                            <svg class="olymp-happy-sticker-icon"><use xlink:href="svg//icons.svg#olymp-happy-sticker-icon"></use></svg>

                            <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat1.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat2.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat3.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat4.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat5.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat6.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat7.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat8.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat9.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat10.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat11.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat12.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat13.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat14.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat15.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat16.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat17.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat18.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat19.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat20.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat21.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat22.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat23.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat24.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat25.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat26.png" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/icon-chat27.png" alt="icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
    <img src="svg/back-to-top.svg" alt="arrow" class="back-icon">
</a>

@endsection
