@extends('layouts.app')
@section('header-title',' User')
@section('title', 'User')
@section('content')
    <div class="header-spacer-big"></div>
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="top-header">
                        <div class="top-header-thumb">
                            {{--<img src="img/top-header1.jpg" alt="nature">--}}
                            {{--<img src="https://via.placeholder.com/1920x640.png?">--}}
                        </div>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                    {{--<ul class="profile-menu">--}}
                                    {{--<li>--}}
                                    {{--<a href="05-ProfilePage-About.html" class="active">About</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="06-ProfilePage.html">Friends</a>--}}
                                    {{--</li>--}}
                                    {{--</ul>--}}
                                </div>
                                <div class="col col-lg-2 ml-auto col-md-2 col-sm-12 col-12">
                                    <ul class="profile-menu">
                                        <li>
                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg>
                                                <ul class="more-dropdown more-with-triangle">
                                                    <li>
                                                        <a href="#">Report Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-header-author">
                            <a href="#" data-toggle="modal" data-target="#update-profile-photo" class="author-thumb">
                                <img src="{{ $user->profile_image ? '/uploads/'.$user->profile_image : 'https://via.placeholder.com/124.png?text=Profile' }}" alt="author" width="124">
                            </a>
                            <div class="author-content">
                                <a href="/home" class="h4 author-name">{{ $user->first_name.' '.$user->last_name }}</a>
                                <div class="country">{{ $user->city ? $user->city.', '.$country->name : '' }}</div>
                                <div class="country" style="font-weight: bold">Point: {{ $point }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Top Header-Profile -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-7 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4 class="title">Employement</h4>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->employments as $employment)
                                        <li>
                                            <span class="title-edu">{{ $employment->title }}</span>
                                            <span class="sub-title">{{ $employment->company }}</span>
                                            <span class="sub-title">{{ $employment->location }}</span>
                                            <span class="date">{{ $employment->start_date.' - '.$employment->end_date }}</span>
                                            <span class="text">{{ $employment->description }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4 class="title">Education</h4>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->educations as $education)
                                        <li>
                                            <span class="title-edu">{{ $education->school }}</span>
                                            <span class="sub-title">{{ $education->degree.' degree, '.$education->field_of_study.' ,'. $education->grade }}</span>
                                            <span class="date">{{ $education->start_year.' - '.$education->end_year }}</span>
                                            <span class="text">{{ $education->description }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4 class="title">Award / Certification</h4>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->awards as $award)
                                        @if($award->verified === 1)
                                            <li>
                                                <span class="title-edu">{{ $award->name }}</span>
                                                <span class="sub-title">{{ $award->organization }}</span>
                                                <span class="date">{{ $award->start_date.' - '.$award->end_date }}</span>
                                                <span class="text">{{ $award->description }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-xl-5 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4 class="title">Personal Info</h4>
                        {{--<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg></a>--}}
                    </div>
                    <div class="ui-block-content">


                        <!-- W-Personal-Info -->

                        <ul class="widget w-personal-info">
                            <li>
                                <span class="title">About Me:</span>
                                <span class="text">{{ $user->about }}
												</span>
                            </li>
                            <li>
                                <span class="title">Birthday:</span>
                                <span class="text">{{ $user->birthday }}</span>
                            </li>
                            <li>
                                <span class="title">Birthplace:</span>
                                <span class="text">{{ $user->birthplace }}</span>
                            </li>
                            <li>
                                <span class="title">Lives in:</span>
                                <span class="text">{{ $user->city ? $user->city.', '.$country->name : '' }}</span>
                            </li>
                            <li>
                                <span class="title">Occupation:</span>
                                <span class="text">{{ $user->occupation }}</span>
                            </li>
                            <li>
                                <span class="title">Joined:</span>
                                <span class="text">{{ date_format($user->created_at, ' M jS, Y') }}</span>
                            </li>
                            <li>
                                <span class="title">Gender:</span>
                                <span class="text">{{ $user->gender === 'MA' ? 'Male' : 'Female' }}</span>
                            </li>
                            <li>
                                <span class="title">Faculty:</span>
                                <span class="text">{{ $user->faculty ? $user->faculty->name : '' }}</span>
                            </li>
                            <li>
                                <span class="title">Major:</span>
                                <span class="text">{{ $user->major ? $user->major->name : ''}}</span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                                <a href="mailto:{{ $user->email }}?Subject=Hello" class="text" target="_top">{{ $user->email }}</a>
                            </li>
                            <li>
                                <span class="title">Phone Number:</span>
                                <span class="text">{{ $user->phone_number }}</span>
                            </li>
                        </ul>

                        <!-- ... end W-Personal-Info -->
                        <!-- W-Socials -->

                        <div class="widget w-socials">
                            <h6 class="title">Other Social Networks:</h6>
                            @if ($user->facebook)
                                <a href="{{ $user->facebook }}" class="social-item bg-facebook">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    Facebook
                                </a>
                            @endif

                            @if ($user->twitter)
                                <a href="https://twitter.com/{{ $user->twitter }}" class="social-item bg-twitter">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    Twitter
                                </a>
                            @endif

                            @if ($user->instagram)
                                <a href="https://instagram.com/{{ $user->instagram }}" class="social-item bg-instagram">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    Instagram
                                </a>
                            @endif

                            @if ($user->linked_in)
                                <a href="{{ $user->linked_in }}" class="social-item bg-linkedin">
                                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                    LinkedIn
                                </a>
                            @endif
                        </div>
                        <!-- ... end W-Socials -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a class="back-to-top" href="#">
        <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
    </a>

@endsection
