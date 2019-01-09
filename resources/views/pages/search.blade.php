@extends('layouts.default')

@section('title', 'Search')

@section('content')
<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

    @include('include.header-menu')

    <div class="header-spacer--standard"></div>

    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Careers</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="#">Home</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>Careers</span>
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
                    <div class="heading-sup-title">JOIN THE TEAM</div>
                    <h2 class="heading-title">Open Positions</h2>
                    <p class="heading-text">Don’t see a position that fits you? No problem! we wanna hear from you, send us an email to:
                        <a href="mailto:careers@olympus.com">careers@olympus.com</a>
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
                        <span>TYPE</span>
                        <span>PLACE</span>
                        <span></span>
                    </li>

                    <li>
                        <span class="date">03/12/2017</span>
                        <span class="position bold">UI/UX Designer</span>
                        <span class="type bold">Full Time</span>
                        <span class="town-place">San Francisco, CA</span>
                        <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#edit-my-poll-popup">Apply Now!</a></span>
                    </li>

                    <li>
                        <span class="date">03/09/2017</span>
                        <span class="position bold">Social Media Manager</span>
                        <span class="type bold">Part Time</span>
                        <span class="town-place">Austin, TX</span>
                        <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#edit-my-poll-popup">Apply Now!</a></span>
                    </li>

                    <li>
                        <span class="date">02/27/2017</span>
                        <span class="position bold">Senior Developer</span>
                        <span class="type bold">Full Time</span>
                        <span class="town-place">San Francisco, CA</span>
                        <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#edit-my-poll-popup">Apply Now!</a></span>
                    </li>

                    <li>
                        <span class="date">02/24/2017</span>
                        <span class="position bold">Content Reviewer</span>
                        <span class="type bold">Remote</span>
                        <span class="town-place">United States</span>
                        <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#edit-my-poll-popup">Apply Now!</a></span>
                    </li>

                    <li>
                        <span class="date">02/24/2017</span>
                        <span class="position bold">Customer Service Manager</span>
                        <span class="type bold">Full Time</span>
                        <span class="town-place">New York, NY</span>
                        <span><a href="#" class="btn btn-primary btn-sm full-width" data-toggle="modal" data-target="#edit-my-poll-popup">Apply Now!</a></span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="medium-padding180 bg-section5 background-cover"></section>


<section class="medium-padding120">
    <div class="container">
        <div class="row mb60">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12  m-auto">
                <div class="crumina-module crumina-heading align-center">
                    <div class="heading-sup-title">WHY JOIN OUR TEAM</div>
                    <h2 class="heading-title">Perks of the Olympians</h2>
                    <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore
                    </p>
                </div>
            </div>
        </div>

        <div class="info-box-wrap">
            <div class="row">
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info7.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Health Coverage</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>

                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info8.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Unlimited Coffee</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info9.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Paid Vacations</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info10.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Free Snack Bar</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info11.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Keep Learning</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
                <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">


                    <!-- Info Box  -->

                    <div class="crumina-module crumina-info-box crumina-info-box--thumb-left">
                        <div class="info-box-image">
                            <img src="img/info12.png" alt="icon">
                        </div>
                        <div class="info-box-content">
                            <h3 class="info-box-title">Gaming Room</h3>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
                        </div>
                    </div>

                    <!-- ... end Info Box  -->

                </div>
            </div>
        </div>
    </div>
</section>


<section class="pb120">
    <div class="container">
        <div class="row">
            <div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12  m-auto">


                <!-- Follow Instagram -->

                <div class="follow-instagram">
                    <img src="img/inst5.jpg" alt="photo">
                    <img src="img/inst4.jpg" alt="photo">
                    <img src="img/inst3.jpg" alt="photo">
                    <img src="img/inst2.jpg" alt="photo">
                    <img src="img/inst1.jpg" alt="photo">
                    <div class="overlay overlay-dark"></div>
                    <a href="#" class="btn btn-blue btn-lg with--icon">
                        <img class="icon" src="img/inst-logo.png" alt="app store">
                        <div class="text">
                            <span class="sup-title">CHECK OUT OUR OFFICES</span>
                            <span class="title">Follow our Instagram</span>
                        </div>
                    </a>
                </div>

                <!-- ... end Follow Instagram -->

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
                                            <input name="datetimepicker" value="10/24/1984" />
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
						Copyright <a href="index.html">Olympus Buddypress + WP</a> All Rights Reserved 2017
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
                <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete js-chat-open"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-little-delete"></use></svg>
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
                            <svg class="olymp-computer-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-computer-icon"></use></svg>
                        </a>
                        <div class="options-message smile-block">

                            <svg class="olymp-happy-sticker-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-happy-sticker-icon"></use></svg>

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
    <img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>



<!-- Edit My Poll Popup -->

<div class="modal fade" id="edit-my-poll-popup" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
    <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <div class="control-block-button post-control-button">
                    <a href="#" class="btn btn-control has-i bg-facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="btn btn-control has-i bg-twitter">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="edit-my-poll-head bg-primary">
                    <div class="head-content">
                        <h2 class="title">Senior Developer</h2>
                        <div class="place inline-items">
                            <svg class="olymp-add-a-place-icon">
                                <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-add-a-place-icon"></use>
                            </svg>
                            <span>SAN FRANCISCO, CA</span>
                            <span>FULL TIME</span>
                        </div>
                    </div>

                    <img class="poll-img" src="img/poll.png" alt="screen">
                </div>

                <div class="edit-my-poll-content">
                    <h3>Job Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                    </p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                    </p>
                    <h3>Requirements</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident:</p>
                    <ul class="list--styled smallest-icon icon-blue">
                        <li>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            5 Years of experience on a simmilar position.
                        </li>
                        <li>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Great knowledge of HTML, CSS, Java and other coding programs.
                        </li>
                        <li>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Big portfolio of previously developed websites.
                        </li>
                        <li>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Sublime Text knowledge is a plus.
                        </li>
                        <li>
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            Great interpersonal skills and confortable talking in public.
                        </li>
                    </ul>

                    <h3>Benefits</h3>
                    <ul class="list--styled small-icon">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Competitive basic salary.
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Generous dental and health plans.
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Accruing vacation and sick days.
                        </li>
                    </ul>

                    <form class="resume-form">
                        <h3>Submit Application</h3>
                        <div class="row">
                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Your Name</label>
                                    <input class="form-control" placeholder="" value="James Spiegel" type="text">
                                </div>
                            </div>
                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Your Email</label>
                                    <input class="form-control" placeholder="" value="jspiegel@yourmail.com" type="email">
                                </div>
                            </div>

                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Portfolio URL</label>
                                    <input class="form-control" placeholder="" value="spiegelcodes.com" type="text">
                                </div>
                            </div>

                            <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group with-button">
                                    <input class="form-control" placeholder="Browse Resume..." value="" type="text">
                                    <button class="bg-grey">
                                        <svg class="olymp-computer-icon">
                                            <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-computer-icon"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Your Comment</label>
                                    <textarea class="form-control" placeholder=""></textarea>
                                </div>
                                <a href="#" class="btn btn-primary btn-lg full-width">Submit Application</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Edit My Poll Popup -->
@endsection
