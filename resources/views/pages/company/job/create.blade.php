@extends('layouts.app')
@section('header-title',' Job')
@section('title', 'Create Job')
@section('content')
    <div class="header-spacer header-spacer-small"></div>


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Add a new job!</h1>
                        {{--<p>Here in the forums you’ll be able to easily create and manage categories and topics to share with the--}}
                            {{--community! We included some of the most used topics, like music, comics, movies, and community, each one with a cool--}}
                            {{--and customizable illustration so you can have fun with them! </p>--}}
                    </div>
                </div>
            </div>
        </div>

        <img class="img-bottom" src="{{ asset('img/group-bottom.png') }}" alt="friends">
    </div>

    <!-- ... end Main Header Groups -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="ui-block">
                    <div class="ui-block-title bg-blue">
                        <h6 class="title c-white">Add New Job</h6>
                    </div>
                    <div class="ui-block-content">

                        <form method="POST" action="{{ route('job.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Job Title</label>
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">City</label>
                                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="" required>

                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Country</label>
                                        <select class="selectpicker form-control" name="country" data-live-search="true" required>
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

                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Seniority Level</label>
                                        <select class="selectpicker form-control" name="seniority" data-live-search="true" required>
                                            @foreach ($seniorities as $seniority)
                                                <option value="{{ $seniority->id }}">{{ $seniority->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('seniority'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('seniority') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Employment Type</label>
                                        <select class="selectpicker form-control" name="type" data-live-search="true" required>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('type'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('type') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group date-time-picker label-floating">
                                        <label class="control-label">End Date</label>
                                        <input name="datetimepicker" required class="datetimepicker">
                                        <span class="input-group-addon">
                                            <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Industry (separate with comma)</label>
                                        <input id="industry" type="text" class="form-control{{ $errors->has('industry') ? ' is-invalid' : '' }}" name="industry" value="" required autofocus>

                                        @if ($errors->has('industry'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('industry') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                                    </div>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('home') }}" class="btn btn-secondary btn-lg full-width">Cancel</a>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="btn btn-blue btn-lg full-width">Post Job</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            allowedContent: true
        };
        CKEDITOR.replace('description', options);
    </script>

@endsection
