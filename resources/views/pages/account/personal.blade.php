@extends('layouts.app')
@section('header-title',' Your Account')
@section('title', 'Your Account - Personal Information')
@section('content')
    <div class="header-spacer header-spacer-small"></div>

    <!-- Main Header Account -->
    @include('include.personal-header')
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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

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
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') ?? $user->email }}" disabled>

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

                                    <div class="form-group label-floating{{ $user->phone_number || old('phone_number') ? '' : ' is-empty' }}">
                                        <label class="control-label">Phone Number</label>
                                        <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') ?? $user->phone_number }}" required>

                                        @if ($errors->has('phone_number'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group label-floating{{ $user->birthplace || old('birthplace') ? '' : ' is-empty' }}">
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
                                        <select class="selectpicker form-control" name="country" data-live-search="true">
                                            @if (count($selectedCountry) > 0)
                                                <option value="{{ $selectedCountry->code }}">{{ $selectedCountry->name }}</option>
                                            @else
                                                <option></option>
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
                                    <div class="form-group label-floating{{ $user->city || old('city') ? '' : ' is-empty' }}">
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
                                        <select class="selectpicker form-control" name="faculty" required data-live-search="true">
                                            @if (count($selectedFaculty) > 0)
                                                <option value="{{ $selectedFaculty->id }}">{{ $selectedFaculty->name }}</option>
                                            @else
                                                <option></option>
                                            @endif
                                            @foreach ($faculties as $faculty)
                                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('faculty'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('faculty') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Major</label>
                                        <select class="selectpicker form-control" required name="major" required data-live-search="true">
                                            @if (count($selectedMajor) > 0)
                                                <option value="{{ $selectedMajor->id }}">{{ $selectedMajor->name }}</option>
                                            @else
                                                <option></option>
                                            @endif
                                            @foreach ($majors as $major)
                                                <option value="{{ $major->id }}">{{ $major->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('major'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('major') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Write a little description about you</label>
                                        <textarea class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" placeholder="" name="about">{{ old('about') ?? $user->about }}</textarea>

                                        @if ($errors->has('about'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('about') }}</strong>
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
                                    <div class="form-group label-floating{{ $user->occupation || old('occupation') ? '' : ' is-empty' }}">
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
                                            @if ($user->gender === 'MA')
                                                <option value="{{ $user->gender }}">Male</option>
                                            @elseif ($user->gender === 'FE')
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
                                    <div class="form-group with-icon label-floating{{ $user->facebook || old('facebook') ? '' : ' is-empty' }}">
                                        <label class="control-label">Facebook Account URL</label>
                                        <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ old('facebook') ?? $user->facebook }}">

                                        @if ($errors->has('facebook'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('facebook') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating{{ $user->twitter || old('twitter') ? '' : ' is-empty' }}">
                                        <label class="control-label">Twitter Username (without @)</label>
                                        <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ old('twitter') ?? $user->twitter }}">

                                        @if ($errors->has('twitter'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('twitter') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating{{ $user->instagram || old('instagram') ? '' : ' is-empty' }}">
                                        <label class="control-label">Instagram Username (without @)</label>
                                        <input id="instagram" type="text" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" value="{{ old('instagram') ?? $user->instagram }}">

                                        @if ($errors->has('instagram'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('instagram') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-instagram c-instagram" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group with-icon label-floating{{ $user->linked_in || old('linked_in') ? '' : ' is-empty' }}">
                                        <label class="control-label">LinkedIn Account URL</label>
                                        <input id="linked_in" type="text" class="form-control{{ $errors->has('linked_in') ? ' is-invalid' : '' }}" name="linked_in" value="{{ old('linked_in') ?? $user->linked_in }}">

                                        @if ($errors->has('linked_in'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('linked_in') }}</strong>
                                            </span>
                                        @endif
                                        <i class="fab fa-linkedin-in c-linkedin" aria-hidden="true"></i>
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

            @include('include.personal-sidebar')
        </div>
    </div>

    <!-- ... end Your Account Personal Information -->

@endsection
