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
                        <h1>Your Job Applications</h1>
                        <p>Here, you can check the job applications for your job postings. </p>
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
                @foreach ($jobs as $job)
                <div class="ui-block">
                    <div class="ui-block-title">
                        <div class="h6 title">{{ $job->title }}</div>
                    </div>
                        @if (count($job->applications) > 0)
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
                                        @if ($jobapp->accepted === 1 || $jobapp->rejected === 1)
                                            <button class="btn btn-grey btn-sm">Show</button>
                                        @else
                                            <button class="btn btn-green btn-sm" onclick="acceptJob({{ $jobapp->id }})" >Accept</button>
                                            <button class="btn btn-primary btn-sm" onclick="rejectJob({{ $jobapp->id }})" >Reject</button>
                                            <button class="btn btn-grey btn-sm">Show</button>
                                        @endif
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
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="accept-job" tabindex="-1" role="dialog" aria-labelledby="accept-job" aria-hidden="true">
        <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-body">
                    <div class="edit-my-poll-content">
                        <div id="description-job" class="description-job">
                        </div>

                        <form class="resume-form" method="POST" action="{{ route('job_application.accept') }}">
                            @csrf
                            <h3>Acceptance Letter</h3>
                            <input type="text" hidden id="accept_job_id" name="accept_job_id">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Acceptance Message</label>
                                        <textarea class="form-control" placeholder="" name="accept_message" id="accept_message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg full-width">Send Acceptance Letter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reject-job" tabindex="-1" role="dialog" aria-labelledby="reject-job" aria-hidden="true">
        <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-body">
                    <div class="edit-my-poll-content">
                        <div id="description-job" class="description-job">
                        </div>

                        <form class="resume-form" method="POST" action="{{ route('job_application.reject') }}">
                            @csrf
                            <h3>Rejection Letter</h3>
                            <input type="text" hidden id="reject_job_id" name="reject_job_id">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Rejection Message</label>
                                        <textarea class="form-control" placeholder="" name="reject_message" id="reject_message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg full-width">Send Rejection Letter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="back-to-top" href="#">
        <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
    </a>

    <script>
        function acceptJob(id)
        {
            $('#accept-job').bind('show.bs.modal', function() {
                $("#accept_job_id").val(id);
            });
            $('#accept-job').modal();
        }

        function rejectJob(id)
        {
            $('#reject-job').bind('show.bs.modal', function() {
                $("#reject_job_id").val(id);
            });
            $('#reject-job').modal();
        }
    </script>


@endsection
