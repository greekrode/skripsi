@extends('layouts.app')
@section('header-title',' Job Application')
@section('title', 'Job Application')
@section('content')
    <div class="header-spacer header-spacer-small"></div>

    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Your Job Application</h1>
                        <p>Here, you can check for your job application. </p>
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

                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Pending</h6>
                    </div>
                    <table class="event-item-table">
                        <tbody>
                        @foreach($jobApplicationsPending as $job)
                            <tr class="event-item">

                                <td class="upcoming">
                                    <div class="date-event">

                                        <svg class="olymp-small-calendar-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-small-calendar-icon"></use></svg>

                                        <span class="day">{{ date_format($job->created_at, 'd') }}</span>
                                        <span class="month">{{ date_format($job->created_at, 'M') }}</span>
                                    </div>
                                </td>
                                <td class="author">
                                    <div class="event-author inline-items">
                                        <div class="author-date">
                                            <a href="{{ route('user.view', $job->job->user->id) }}" class="author-name h6">{{ $job->job->user->first_name }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="location">
                                    <div class="place inline-items">
                                        <span>{{ $job->title }}</span>
                                    </div>
                                </td>
                                <td class="description">
                                    <p class="description">{{ $job->job->type->name }}</p>
                                </td>
                                <td class="description">
                                    <p class="description">{{ $job->job->seniority->name }}</p>
                                </td>
                                <td class="description">
                                    <p class="description">{{ $job->job->title }}</p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Accepted</h6>
                    </div>

                    @if(count($jobApplicationsAccepted) > 0)
                        <table class="event-item-table">
                            <tbody>
                            @foreach($jobApplicationsAccepted as $job)
                                <tr class="event-item">

                                    <td class="upcoming">
                                        <div class="date-event">

                                            <svg class="olymp-small-calendar-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-small-calendar-icon"></use></svg>

                                            <span class="day">{{ date_format($job->created_at, 'd') }}</span>
                                            <span class="month">{{ date_format($job->created_at, 'M') }}</span>
                                        </div>
                                    </td>
                                    <td class="author">
                                        <div class="event-author inline-items">
                                            <div class="author-date">
                                                <a href="{{ route('user.view', $job->job->user->id) }}" class="author-name h6">{{ $job->job->user->first_name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="place inline-items">
                                            <span>{{ $job->title }}</span>
                                        </div>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->type->name }}</p>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->seniority->name }}</p>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->title }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                    <div class="no-past-events">
                        <span>No job application</span>
                    </div>
                    @endif

                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Rejected</h6>
                    </div>

                    @if(count($jobApplicationsRejected) > 0)
                        <table class="event-item-table">
                            <tbody>
                            @foreach($jobApplicationsRejected as $job)
                                <tr class="event-item">

                                    <td class="upcoming">
                                        <div class="date-event">

                                            <svg class="olymp-small-calendar-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-small-calendar-icon"></use></svg>

                                            <span class="day">{{ date_format($job->created_at, 'd') }}</span>
                                            <span class="month">{{ date_format($job->created_at, 'M') }}</span>
                                        </div>
                                    </td>
                                    <td class="author">
                                        <div class="event-author inline-items">
                                            <div class="author-date">
                                                <a href="{{ route('user.view', $job->job->user->id) }}" class="author-name h6">{{ $job->job->user->first_name }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="place inline-items">
                                            <span>{{ $job->title }}</span>
                                        </div>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->type->name }}</p>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->seniority->name }}</p>
                                    </td>
                                    <td class="description">
                                        <p class="description">{{ $job->job->title }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="no-past-events">
                            <span>No job application</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>




    <a class="back-to-top" href="#">
        <img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
    </a>


@endsection
