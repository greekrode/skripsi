@extends('layouts.app')
@section('header-title',' Home')
@section('title', 'Home')
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
                                        {{--<li>--}}
                                            {{--<a href="07-ProfilePage-Photos.html">Photos</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="09-ProfilePage-Videos.html">Videos</a>--}}
                                        {{--</li>--}}
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

                            <div class="control-block-button">
                                {{--<a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">--}}
                                    {{--<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-happy-face-icon"></use></svg>--}}
                                {{--</a>--}}

                                {{--<a href="#" class="btn btn-control bg-purple">--}}
                                    {{--<svg class="olymp-chat---messages-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-chat---messages-icon"></use></svg>--}}
                                {{--</a>--}}

                                    <div class="btn btn-control bg-primary more">
                                    <svg class="olymp-settings-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-settings-icon"></use></svg>

                                    <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#update-profile-photo">Update Profile Photo</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('account.personal.edit', ['id' => $user->id]) }}">Account Settings</a>
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
                                <div class="country">Medan, ID</div>
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
                        <a href="#" class="more" data-toggle="modal" data-target="#create-employment"><svg class="olymp-plus-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-plus-icon"></use></svg></a>

                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->employments as $employment)
                                        @if ($loop->first)
                                            <li>
                                                <span class="title-edu">{{ $employment->title }}</span>
                                                <span class="edit-edu"><a id="edit-edu" href="#" onclick="editEdu({{ $employment->id }});"><i class="fa fa-pencil-alt"></i></a></span>
                                                <span class="sub-title">{{ $employment->company }}</span>
                                                <span class="sub-title">{{ $employment->location }}</span>
                                                <span class="date">{{ $employment->start_date.' - '.$employment->end_date }}</span>
                                                <span class="text">{{ $employment->description }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $employment->title }}</span>
                                                <span class="edit-edu"><a id="edit-edu" href="#" onclick="editEdu({{ $employment->id }});"><i class="fa fa-pencil-alt"></i></a></span>
                                                <span class="sub-title">{{ $employment->company }}</span>
                                                <span class="sub-title">{{ $employment->location }}</span>
                                                <span class="date">{{ $employment->start_date.' - '.$employment->end_date }}</span>
                                                <span class="text">{{ $employment->description }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                            {{--<div class="col col-lg-6 col-md-6 col-sm-12 col-12">--}}


                            {{--<!-- W-Personal-Info -->--}}

                            {{--<ul class="widget w-personal-info item-block">--}}
                            {{--<li>--}}
                            {{--<span class="title">Digital Design Intern</span>--}}
                            {{--<span class="date">2006-2008</span>--}}
                            {{--<span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<span class="title">UI/UX Designer</span>--}}
                            {{--<span class="date">2008-2013</span>--}}
                            {{--<span class="text">UI/UX Designer for the “Daydreams” agency. </span>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<span class="title">Senior UI/UX Designer</span>--}}
                            {{--<span class="date">2013-Now</span>--}}
                            {{--<span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>--}}
                            {{--</li>--}}
                            {{--</ul>--}}

                            {{--<!-- ... end W-Personal-Info -->--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h4 class="title">Education</h4>
                        <a href="#" class="more" data-toggle="modal" data-target="#create-education"><svg class="olymp-plus-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-plus-icon"></use></svg></a>

                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->educations as $education)
                                        @if ($loop->first)
                                            <li>
                                                <span class="title-edu">{{ $education->school }}</span>
                                                <span class="edit-edu"><a id="edit-edu" href="#" onclick="editEdu({{ $education->id }});"><i class="fa fa-pencil-alt"></i></a></span>
                                                <span class="sub-title">{{ $education->degree.' degree, '.$education->field_of_study.' ,'. $education->grade }}</span>
                                                <span class="date">{{ $education->start_year.' - '.$education->end_year }}</span>
                                                <span class="text">{{ $education->description }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $education->school }}</span>
                                                <span class="edit-edu"><a id="edit-edu" href="#" onclick="editEdu({{ $education->id }});"><i class="fa fa-pencil-alt"></i></a></span>
                                                <span class="sub-title">{{ $education->degree.' degree, '.$education->field_of_study.' ,'. $education->grade }}</span>
                                                <span class="date">{{ $education->start_year.' - '.$education->end_year }}</span>
                                                <span class="text">{{ $education->description }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                            {{--<div class="col col-lg-6 col-md-6 col-sm-12 col-12">--}}


                                {{--<!-- W-Personal-Info -->--}}

                                {{--<ul class="widget w-personal-info item-block">--}}
                                    {{--<li>--}}
                                        {{--<span class="title">Digital Design Intern</span>--}}
                                        {{--<span class="date">2006-2008</span>--}}
                                        {{--<span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<span class="title">UI/UX Designer</span>--}}
                                        {{--<span class="date">2008-2013</span>--}}
                                        {{--<span class="text">UI/UX Designer for the “Daydreams” agency. </span>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<span class="title">Senior UI/UX Designer</span>--}}
                                        {{--<span class="date">2013-Now</span>--}}
                                        {{--<span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}

                                {{--<!-- ... end W-Personal-Info -->--}}
                            {{--</div>--}}
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
                                <span class="text">{{ $user->city.', '. $country->name }}</span>
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
                                <span class="text">{{ $user->faculty->name }}</span>
                            </li>
                            <li>
                                <span class="title">Major:</span>
                                <span class="text">{{ $user->major->name }}</span>
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
                            <a href="{{ $user->facebook }}" class="social-item bg-facebook">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                Facebook
                            </a>
                            <a href="https://twitter.com/{{ $user->twitter }}" class="social-item bg-twitter">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                Twitter
                            </a>
                            <a href="https://instagram.com/{{ $user->instagram }}" class="social-item bg-instagram">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                Instagram
                            </a>
                            <a href="{{ $user->linked_in }}" class="social-item bg-linkedin">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                LinkedIn
                            </a>
                        </div>
                        <!-- ... end W-Socials -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Window-popup Update Profile Photo -->

    <div class="modal fade" id="update-profile-photo" tabindex="-1" role="dialog" aria-labelledby="update-profile-photo" aria-hidden="true">
        <div class="modal-dialog window-popup update-header-photo" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Update Profile Photo</h6>
                </div>

                <div class="modal-body">
                    <form class="upload-photo-item" method="POST" action="{{ route('account.profilephoto.upload', ['id' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <svg class="olymp-computer-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-computer-icon"></use>
                        </svg>

                        <h6>Upload photo</h6>
                        <input type="file" id="image" name="image" class="form-control">
                        <button class="btn btn-primary btn-lg full-width" type="submit">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ... end Window-popup Update Profile Photo -->

    <!-- Window-popup Create Education -->

    <div class="modal fade" id="create-education" tabindex="-1" role="dialog" aria-labelledby="create-education" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Add Education</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('education.store') }}">
                        @csrf
                        <div class="form-group  is-empty">
                            <label class="control-label">School</label>
                            <input id="school" type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="" required autofocus>

                            @if ($errors->has('school'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('school') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Degree</label>
                            <input id="degree" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="" required>

                            @if ($errors->has('degree'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('degree') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Field of study</label>
                            <input id="field_of_study" type="text" class="form-control{{ $errors->has('field_of_study') ? ' is-invalid' : '' }}" name="field_of_study" value="" required>

                            @if ($errors->has('field_of_study'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('field_of_study') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Grade</label>
                            <input id="grade" type="text" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" name="grade" value="" required>

                            @if ($errors->has('grade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('grade') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group  is-select">
                                    <label class="control-label">From Year</label>
                                    <select class="selectpicker form-control" name="from_year" id="from_year">
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group  is-select">
                                    <label class="control-label">To Year (or expected)</label>
                                    <select class="selectpicker form-control" name="to_year" id="to_year">
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description"></textarea>
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Education -->

    <!-- Window-popup Create Employment -->

    <div class="modal fade" id="create-employment" tabindex="-1" role="dialog" aria-labelledby="create-employment" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Add Employment</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('employment.store') }}">
                        @csrf
                        <div class="form-group  is-empty">
                            <label class="control-label">Title</label>
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Company</label>
                            <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="" required>

                            @if ($errors->has('company'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Location</label>
                            <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="" required>

                            @if ($errors->has('location'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group is-select">
                                    <label class="control-label">From Month</label>
                                    <select class="selectpicker form-control" name="from_month" id="from_month">
                                        <option value="null">Month</option>
                                        <option value="Jan">January</option>
                                        <option value="Feb">February</option>
                                        <option value="Mar">March</option>
                                        <option value="Apr">April</option>
                                        <option value="May">May</option>
                                        <option value="Jun">June</option>
                                        <option value="Jul">July</option>
                                        <option value="Aug">August</option>
                                        <option value="Sep">September</option>
                                        <option value="Oct">October</option>
                                        <option value="Nov">November</option>
                                        <option value="Dec">December</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group is-select">
                                    <label class="control-label">From Year</label>
                                    <select class="selectpicker form-control" name="from_year" id="from_year" required>
                                        <option value="null">Year</option>
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12 to-year-div">
                                <div class="form-group  is-select">
                                    <label class="control-label">To Month</label>
                                    <select class="selectpicker form-control" name="to_month" id="to_month">
                                        <option value="null">Month</option>
                                        <option value="Jan">January</option>
                                        <option value="Feb">February</option>
                                        <option value="Mar">March</option>
                                        <option value="Apr">April</option>
                                        <option value="May">May</option>
                                        <option value="Jun">June</option>
                                        <option value="Jul">July</option>
                                        <option value="Aug">August</option>
                                        <option value="Sep">September</option>
                                        <option value="Oct">October</option>
                                        <option value="Nov">November</option>
                                        <option value="Dec">December</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12 to-year-div">
                                <div class="form-group  is-select">
                                    <label class="control-label">To Year</label>
                                    <select class="selectpicker form-control" name="to_year" id="to_year">
                                        <option value="null">Year</option>
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="remember">
                                <div class="checkbox">
                                    <label>
                                        <input name="present" id="present" type="checkbox" onchange="toDiv()" checked>
                                        I currently work here
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description"></textarea>
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Employment -->

    <!-- ...  Window-popup Edit Education -->

    <div class="modal fade" id="edit-education" tabindex="-1" role="dialog" aria-labelledby="edit-education" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Edit Education</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('education.update') }}">
                        @csrf
                        <input type="hidden" id="edu-id" name="edu_id">
                        <div class="form-group">
                            <label class="control-label">School</label>
                            <input id="school-edit" type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="" required autofocus>

                            @if ($errors->has('school'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('school') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Degree</label>
                            <input id="degree-edit" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="">

                            @if ($errors->has('degree'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('degree') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Field of study</label>
                            <input id="field_of_study-edit" type="text" class="form-control{{ $errors->has('field_of_study') ? ' is-invalid' : '' }}" name="field_of_study" value="">

                            @if ($errors->has('field_of_study'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('field_of_study') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group is-select">
                                    <label class="control-label">From Year</label>
                                    <select class="selectpicker form-control" name="from_year" id="from_year-edit">
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group is-select">
                                    <label class="control-label">To Year (or expected)</label>
                                    <select class="selectpicker form-control" name="to_year" id="to_year-edit">
                                        @for($i = date_format(new DateTime(), 'Y'); $i >= 1900; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description" id="description-edit"></textarea>
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Edit Education -->


    <a class="back-to-top" href="#">
        <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
    </a>



    <script>
        function editEdu(id)
        {
            $.ajax({
                url: '{{ route('education.show') }}',
                method: 'get',
                data: {
                    edu_id: id
                },
                success: function(response)
                {
                    $('#edit-education').bind('show.bs.modal', function()
                    {
                        $('#school-edit').val(response.school);
                        $('#degree-edit').val(response.degree);
                        $('#field_of_study-edit').val(response.field_of_study);
                        $('#grade-edit').val(response.grade);
                        $('#from_year-edit').val(response.start_year);
                        $('#to_year-edit').val(response.end_year);
                        $('#description-edit').val(response.description);
                        $('#edu-id').val(response.id);
                    });
                    $('#edit-education').modal();
                    console.log(response);
                }
            });
        }

        function toDiv()
        {
            if ($('#present').prop('checked') === true) {
                $('.to-year-div').hide("slow");
            } else {
                $('.to-year-div').show("slow");
            }
        }
    </script>
@endsection
