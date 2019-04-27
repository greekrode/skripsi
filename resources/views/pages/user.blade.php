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
                                <div class="country">{{ $user->city.', '.$user->country }}</div>
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
                                                <span class="edit-edu">
                                                    <a id="edit-edu" href="#" onclick="editEmp({{ $employment->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('employment.destroy', $employment->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-emp-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-emp-form" action="{{ route('employment.destroy', $employment->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
                                                <span class="sub-title">{{ $employment->company }}</span>
                                                <span class="sub-title">{{ $employment->location }}</span>
                                                <span class="date">{{ $employment->start_date.' - '.$employment->end_date }}</span>
                                                <span class="text">{{ $employment->description }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $employment->title }}</span>
                                                <span class="edit-edu">
                                                    <a id="edit-edu" href="#" onclick="editEmp({{ $employment->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('employment.destroy', $employment->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-emp-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-emp-form" action="{{ route('employment.destroy', $employment->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
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
                                                <span class="edit-edu">
                                                    <a id="edit-edu" href="#" onclick="editEdu({{ $education->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('education.destroy', $education->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-edu-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-edu-form" action="{{ route('education.destroy', $education->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
                                                <span class="sub-title">{{ $education->degree.' degree, '.$education->field_of_study.' ,'. $education->grade }}</span>
                                                <span class="date">{{ $education->start_year.' - '.$education->end_year }}</span>
                                                <span class="text">{{ $education->description }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $education->school }}</span>
                                                <span class="edit-edu">
                                                    <a id="edit-edu" href="#" onclick="editEdu({{ $education->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('education.destroy', $education->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-edu-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-edu-form" action="{{ route('education.destroy', $education->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
                                                <span class="sub-title">{{ $education->degree.' degree, '.$education->field_of_study.' ,'. $education->grade }}</span>
                                                <span class="date">{{ $education->start_year.' - '.$education->end_year }}</span>
                                                <span class="text">{{ $education->description }}</span>
                                            </li>
                                        @endif
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
                        <a href="#" class="more" data-toggle="modal" data-target="#create-award"><svg class="olymp-plus-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-plus-icon"></use></svg></a>

                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->awards as $award)
                                        @if ($loop->first)
                                            <li>
                                                <span class="title-edu">{{ $award->name }}</span>
                                                <span class="edit-edu">
                                                    <a id="edit-awd" href="#" onclick="editAwd({{ $award->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('award.destroy', $award->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-awd-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-awd-form" action="{{ route('award.destroy', $award->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    </span>
                                                <span class="sub-title">{{ $award->organization }}</span>
                                                <span class="date">{{ $award->start_date.' - '.$award->end_date }}</span>
                                                <span class="text">{{ $award->description }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $award->name }}</span>
                                                <span class="edit-edu">
                                                    <a id="edit-awd" href="#" onclick="editAwd({{ $award->id }});">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('award.destroy', $award->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-awd-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-awd-form" action="{{ route('award.destroy', $award->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    </span>
                                                </span>
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
                                    <select class="selectpicker form-control" name="from_month" id="from_month" required>
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

    <!-- Window-popup Create Award -->

    <div class="modal fade" id="create-award" tabindex="-1" role="dialog" aria-labelledby="create-award" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Add Award / Certification</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('award.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  is-empty">
                            <label class="control-label">Name</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Organization</label>
                            <input id="organization" type="text" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}" name="organization" value="" required>

                            @if ($errors->has('organization'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('organization') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating date-time-picker">
                                    <label class="control-label">Start Date</label>
                                    <input name="start_date" value="" required class="datetimepicker">
                                    <span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                    </span>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">End Date</label>
                                    <input name="end_date" value="" required class="datetimepicker">
                                    <span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>

                        <div class="form-group  is-empty">
                            <label class="control-label">Link</label>
                            <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="">

                            @if ($errors->has('link'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Award -->

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

    <!-- Window-popup Edit Employment -->

    <div class="modal fade" id="edit-employment" tabindex="-1" role="dialog" aria-labelledby="edit-employment" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Edit Employment</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('employment.update') }}">
                        @csrf
                        <input type="hidden" id="emp-id" name="emp_id">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input id="title-edit" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Company</label>
                            <input id="company-edit" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="" required>

                            @if ($errors->has('company'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Location</label>
                            <input id="location-edit" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="" required>

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
                                    <select class="selectpicker form-control" name="from_month" id="from_month-edit" required>
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
                                    <select class="selectpicker form-control" name="from_year" id="from_year-edit-emp" required>
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
                                    <select class="selectpicker form-control" name="to_month" id="to_month-edit">
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
                                    <select class="selectpicker form-control" name="to_year" id="to_year-edit-emp">
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
                                        <input name="present" id="present-edit" type="checkbox" onchange="toDivEdit()" checked>
                                        I currently work here
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description" id="description-edit-emp"></textarea>
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Edit Employment -->

    <!-- ...  Window-popup Edit Award -->

    <div class="modal fade" id="edit-award" tabindex="-1" role="dialog" aria-labelledby="edit-award" aria-hidden="true">
        <div class="modal-dialog window-popup create-event" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Edit Award/Certification</h6>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('award.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="awd-id" name="awd_id">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input id="name-edit" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Organization</label>
                            <input id="organization-edit" type="text" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}" name="organization" value="">

                            @if ($errors->has('organization'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('organization') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating date-time-picker">
                                    <label class="control-label">Start Date</label>
                                    <input name="start_date" value="" required class="datetimepicker" id="start_date-edit">
                                    <span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                    </span>
                                </div>
                            </div>

                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">End Date</label>
                                    <input name="end_date" value="" required class="datetimepicker" id="end_date-edit">
                                    <span class="input-group-addon">
                                        <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Description</label>
                            <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="" name="description" id="description-edit-awd"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Image (Leave it blank if nothing to change)</label>
                            <input type="file" id="image-edit" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Link</label>
                            <input id="link-edit" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="">

                            @if ($errors->has('link'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button class="btn btn-breez btn-lg full-width" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Edit Award -->


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
                    eduId: id
                },
                success: function(response)
                {
                    $('#edit-education').bind('show.bs.modal', function()
                    {
                        $('#edu-id').val(response.id);
                        $('#school-edit').val(response.school);
                        $('#degree-edit').val(response.degree);
                        $('#field_of_study-edit').val(response.field_of_study);
                        $('#grade-edit').val(response.grade);
                        $('#from_year-edit').val(response.start_year);
                        $('#to_year-edit').val(response.end_year);
                        $('#description-edit').val(response.description);
                    });
                    $('#edit-education').modal();
                    console.log(response);
                }
            });
        }

        function editEmp(id)
        {
            $.ajax({
                url: '{{ route('employment.show') }}',
                method: 'get',
                data: {
                    empId: id
                },
                success: function(response)
                {
                    $('#edit-employment').bind('show.bs.modal', function() {
                        $('#emp-id').val(response.id);
                        $('#title-edit').val(response.title);
                        $('#company-edit').val(response.company);
                        $('#location-edit').val(response.location);
                        $('#from_month-edit').val(response.start_date.split(" ")[0]).change();
                        $('#from_year-edit-emp').val(response.start_date.split(" ")[1]).change();
                        if (response.end_date !== 'Present') {
                            $('#present-edit').prop('checked', false);
                            $('.to-year-div').show();
                            $('#to_month-edit').val(response.end_date.split(" ")[0]).change();
                            $('#to_year-edit-emp').val(response.end_date.split(" ")[1]).change();
                        } else {
                            $('#present-edit').prop('checked', true);
                            $('.to-year-div').hide();
                        }
                        $('#description-edit-emp').val(response.description);
                    });
                    $('#edit-employment').modal();
                    console.log(response);
                }
            });
        }

        function editAwd(id)
        {
            $.ajax({
                url: '{{ route('award.show') }}',
                method: 'get',
                data: {
                    awdId: id
                },
                success: function(response)
                {
                    $('#edit-award').bind('show.bs.modal', function() {
                        $('#awd-id').val(response.id);
                        $('#name-edit').val(response.name);
                        $('#organization-edit').val(response.organization);
                        $('#start_date-edit').val(response.start_date);
                        $('#end_date-edit').val(response.end_date);
                        $('#description-edit-awd').val(response.description);
                        $('#link-edit').val(response.link);
                    });
                    $('#edit-award').modal();
                    console.log(response);
                }
            });
        }

        function toDivEdit()
        {
            if ($('#present-edit').prop('checked') === true) {
                $('.to-year-div').hide("slow");
            } else {
                $('.to-year-div').show("slow");
            }
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
