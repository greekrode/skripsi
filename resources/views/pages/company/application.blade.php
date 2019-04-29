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
                    @foreach ($jobs as $job)
                    <div class="ui-block-title">
                        <div class="h6 title">{{ $job->title }}</div>
                    </div>
                        @if ($job->applications)
                        <table class="event-item-table">
                            <tbody>
                            @foreach($job->applications as $jobapp)
                                <tr class="event-item">

                                    <td class="upcoming">
                                        <div class="date-event">

                                            <svg class="olymp-small-calendar-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-small-calendar-icon"></use></svg>

                                            <span class="day">{{ date_format($jobapp->created_at, 'd') }}</span>
                                            <span class="month">{{ date_format($jobapp->created_at, 'M') }}</span>
                                        </div>
                                    </td>
                                    <td class="author">
                                        <div class="event-author inline-items">
                                            <a href="{{ route('user.view', $jobapp->user->id) }}" class="author-name h6">{{ $jobapp->user->first_name.' '.$jobapp->user->last_name }}</a>
                                        </div>
                                    </td>
                                    <td class="author">
                                        <div class="event-author inline-items">
                                            <a href="mailto:{{ $jobapp->user->email }}?Subject={{ $jobapp->job->title }}" target="_blank" class="author-name h6">{{ $jobapp->user->email }}</a>
                                        </div>
                                    </td>
                                    <td class="location">
                                        <div class="place inline-items">
                                            @if ($jobapp->accepted === 0 && $jobapp->rejected === 0)
                                                <span>Pending</span>
                                            @elseif ($jobapp->accepted === 1)
                                                <span>Accepted</span>
                                            @elseif ($jobapp->rejected === 1)
                                                <span>Rejected</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td style="text-align: center">
                                        <button class="btn btn-green btn-sm">Accept</button>
                                        <button class="btn btn-primary btn-sm" >Reject</button>
                                        <button class="btn btn-grey btn-sm">Show</button>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    <a class="back-to-top" href="#">
        <img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
    </a>


@endsection
