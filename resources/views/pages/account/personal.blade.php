@extends('layouts.app')
@section('header-title',' Your Account')
@section('title', 'Your Account - Personal Information')
@section('content')
    <!-- Main Header Account -->

    <div class="main-header">
        <div class="content-bg-wrap bg-account"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Your Account Dashboard</h1>
                        <p>Welcome to your account dashboard! Here you’ll find everything you need to change your profile
                            information, settings, read notifications and requests, view your latest messages, change your pasword and much
                            more! Also you can create or manage your own favourite page, have fun!</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="{{ asset('img/account-bottom.png') }}" alt="friends">
    </div>

    <!-- ... end Main Header Account -->


    <!-- Your Account Personal Information -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Personal Information</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Personal Information Form  -->

                        <form method="POST" action="{{ route('account.personal.update', ['id' => Auth::user()->id]) }}">
                            @csrf
                            <div class="row">

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') ?? $user->email }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group date-time-picker label-floating">
                                        <label class="control-label">Your Birthday</label>
                                        <input name="datetimepicker" value="{{ old('birthday') ?? $user->birthday }}" required>
                                        <span class="input-group-addon">
                                            <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" required>

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Your Website</label>--}}
                                        {{--<input class="form-control" placeholder="" type="email" value="daydreamzagency.com">--}}
                                    {{--</div>--}}

                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone Number (+XX)XXXX</label>
                                        <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') ?? $user->phone_number }}" required>

                                        @if ($errors->has('phone_number'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Birthplace</label>
                                        <input id="birthplace" type="text" class="form-control{{ $errors->has('birthplace') ? ' is-invalid' : '' }}" name="birthplace" value="{{ old('birthplace') ?? $user->birthplace }}">

                                        @if ($errors->has('birthplace'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('birthplace') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Country</label>
                                        <select class="selectpicker form-control" name="country" required data-live-search="true">
                                            @if (count($selectedCountry) > 0)
                                                <option value="{{ $selectedCountry->code }}">{{ $selectedCountry->name }}</option>
                                            @endif
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->code }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="col col-lg-4 col-md-4 col-sm-12 col-12">--}}
                                    {{--<div class="form-group label-floating is-select">--}}
                                        {{--<label class="control-label">Your State / Province</label>--}}
                                        {{--<select class="selectpicker form-control">--}}
                                            {{--<option value="CA">California</option>--}}
                                            {{--<option value="TE">Texas</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your City</label>
                                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') ?? $user->city }}" required>

                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Faculty</label>
                                        <select class="selectpicker form-control" name="country" required data-live-search="true">
                                            @if (count($selectedCountry) > 0)
                                                <option value="{{ $selectedCountry->code }}">{{ $selectedCountry->name }}</option>
                                            @endif
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->code }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Major</label>
                                        <select class="selectpicker form-control" name="country" required data-live-search="true">
                                            @if (count($selectedCountry) > 0)
                                                <option value="{{ $selectedCountry->code }}">{{ $selectedCountry->name }}</option>
                                            @endif
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->code }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Write a little description about you</label>
                                        <textarea class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="" name="description">{{ old('description') ?? $user->description }}</textarea>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    {{--<div class="form-group label-float
                                    ing is-empty">--}}
                                        {{--<label class="control-label">Religious Belifs</label>--}}
                                        {{--<input class="form-control" placeholder="" type="text">--}}
                                    {{--</div>--}}
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Occupation</label>
                                        <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="{{ old('occupation') ?? $user->occupation }}">

                                        @if ($errors->has('occupation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('occupation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    {{--<div class="form-group label-floating is-select">--}}
                                        {{--<label class="control-label">Status</label>--}}
                                        {{--<select class="selectpicker form-control">--}}
                                            {{--<option value="MA">Married</option>--}}
                                            {{--<option value="FE">Not Married</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Political Incline</label>--}}
                                        {{--<input class="form-control" placeholder="" type="text" value="Democrat">--}}
                                    {{--</div>--}}
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Gender</label>
                                        <select class="selectpicker form-control" name="gender" required>
                                            @if ($user->gender === 'M')
                                                <option value="{{ $user->gender }}">Male</option>
                                            @elseif ($user->gender === 'F')
                                                <option value="{{ $user->gender }}">Female</option>
                                            @else
                                                <option value="MA">Male</option>
                                                <option value="FE">Female</option>
                                            @endif
                                        </select>

                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group with-icon label-floating">
                                        <label class="control-label">Your Facebook Account</label>
                                        <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ old('facebook') ?? $user->facebook }}">

                                        @if ($errors->has('facebook'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('facebook') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating">
                                        <label class="control-label">Your Twitter Account</label>
                                        <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ old('twitter') ?? $user->twitter }}">

                                        @if ($errors->has('twitter'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('twitter') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating is-empty">
                                        <label class="control-label">Your Instagram Account</label>
                                        <input id="instagram" type="text" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" value="{{ old('instagram') ?? $user->instagram }}">

                                        @if ($errors->has('instagram'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('instagram') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-instagram c-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating is-empty">
                                        <label class="control-label">Your LinkedIn Account</label>
                                        <input id="linked_in" type="text" class="form-control{{ $errors->has('linked_in') ? ' is-invalid' : '' }}" name="linked_in" value="{{ old('linked_in') ?? $user->linked_in }}">

                                        @if ($errors->has('linked_in'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('linked_in') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <button class="btn btn-primary btn-lg full-width" type="submit">Save Changes</button>
                                </div>

                            </div>
                        </form>

                        <!-- ... end Personal Information Form  -->
                    </div>
                </div>
            </div>

            <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
                <div class="ui-block">

                    <!-- Your Profile  -->

                    <div class="your-profile">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Your PROFILE</h6>
                        </div>

                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Profile Settings
                                            <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-dropdown-arrow-icon"></use></svg>
                                        </a>
                                    </h6>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <ul class="your-profile-menu">
                                        <li>
                                            <a href="{{ route('account.personal.edit', ['id' => Auth::user()->id]) }}" class="active">Personal Information</a>
                                        </li>
                                        <li>
                                            <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                        </li>
                                        <li>
                                            <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                        </li>
                                        {{--<li>--}}
                                            {{--<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ui-block-title">
                            <a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
                            <a href="#" class="items-round-little bg-primary">8</a>
                        </div>
                        <div class="ui-block-title">
                            <a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
                        </div>
                        <div class="ui-block-title">
                            <a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
                            <a href="#" class="items-round-little bg-blue">4</a>
                        </div>
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">FAVOURITE PAGE</h6>
                        </div>
                        <div class="ui-block-title">
                            <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
                        </div>
                        <div class="ui-block-title">
                            <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
                        </div>
                    </div>

                    <!-- ... end Your Profile  -->


                </div>
            </div>
        </div>
    </div>

    <!-- ... end Your Account Personal Information -->

@endsection
