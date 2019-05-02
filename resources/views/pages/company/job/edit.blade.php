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
                        <h1>Edit job</h1>
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
            <div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

                <div class="ui-block">
                    <div class="ui-block-title bg-blue">
                        <h6 class="title c-white">Edit Job</h6>
                    </div>
                    <div class="ui-block-content">

                        <form method="POST" action="{{ route('job.update', $job->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Job Title</label>
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') ?? $job->title }}" required autofocus>

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
                                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') ?? $job->city }}" required>

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
                                                <option value="{{ $country->code }}" {{ $country->code === $job->country ? ' selected' : '' }}>{{ $country->name }}</option>
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
                                                <option value="{{ $seniority->id }}" {{ $seniority->id === $job->seniority_id ? ' selected' : ''}}>{{ $seniority->name }}</option>
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
                                                <option value="{{ $type->id }}" {{ $type->id === $job->type_id ? ' selected'  : ''}}>{{ $type->name }}</option>
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
                                        <input name="datetimepicker" value="{{ old('end_date') ?? date('d/m/Y', strtotime($job->end_date)) }}" required class="datetimepicker">
                                        <span class="input-group-addon">
                                            <svg class="olymp-month-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-month-calendar-icon"></use></svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Industry (separate with comma)</label>
                                        <input id="industry" type="text" class="form-control{{ $errors->has('industry') ? ' is-invalid' : '' }}" name="industry" value=" {{ old('industry') ?? $job->industry }}" required autofocus>

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
                                        <textarea id="description" name="description" class="form-control">{!! old('description') ?? $job->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <a href="{{ route('home') }}" class="btn btn-secondary btn-lg full-width">Cancel</a>
                                </div>

                                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="btn btn-blue btn-lg full-width">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Featured Topics</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Widget Featured Topics -->

                        <ul class="widget w-featured-topics">
                            <li>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <div class="content">
                                    <a href="#" class="h6 title">The new Goddess of War trailer was launched at E3!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 16 minutes ago</time>
                                </div>
                            </li>
                            <li>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <div class="content">
                                    <a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">14 hours, 36 minutes ago</time>
                                </div>
                            </li>
                            <li>
                                <i class="icon fa fa-star" aria-hidden="true"></i>
                                <div class="content">
                                    <a href="#" class="h6 title">Here are the behind-the-scenes photos of “Vilords”</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">9 hours, 8 minutes ago</time>
                                </div>
                            </li>
                        </ul>

                        <!-- ... end Widget Featured Topics -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Recent Topics</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Widget Recent Topics -->

                        <ul class="widget w-featured-topics">
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Summer is Coming! Picnic in the east boulevard park</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">26 minutes ago</time>
                                    <div class="forums">The Community</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Kung Fighters released a new video, check it out here!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">44 minutes ago</time>
                                    <div class="forums">The Boombox</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">What’s your favourite season?</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">59 minutes ago</time>
                                    <div class="forums">The Community</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Who had the best presentation at this year’s E3? Rate them!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 3 minutes ago</time>
                                    <div class="forums">Arcade Planet</div>
                                </div>
                            </li>
                        </ul>

                        <!-- ... end Widget Recent Topics -->
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
