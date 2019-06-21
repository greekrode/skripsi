@extends('layouts.app')
@section('header-title',' Search Job')
@section('title', 'Job Search')
@section('content')
    <div class="header-spacer header-spacer-small"></div>

    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Search Your Job Here!</h1>
                        <p>Here, you can search for job vacancy </p>
                    </div>
                </div>
            </div>
        </div>

        <img class="img-bottom" src="{{ asset('img/group-bottom.png') }}" alt="friends">
    </div>

    <!-- ... end Main Header Groups -->

    <!-- Search Widget -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Search Filter (Seniority / Position / Employment Type / Country)</h6>
                </div>
                <div class="ui-block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Search Form -->
                    <form>
                        <div class="row">
                            <div class="col col-12 col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Seniority / Position / Employment Type / Country</label>
                                    <input class="form-control" placeholder="" value="" type="text" id="search_bar" name="search_bar" onkeyup="liveSearch()">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- ... end Search Form -->
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="ui-block">
                <!-- Forums Table -->

                <table class="forums-table">
                    <thead>
                        <tr>
                            <th class="forum">
                                Date Posted
                            </th>
                            <th class="company">
                                Company
                            </th>
                            <th class="Position">
                                Position
                            </th>
                            <th class="type">
                                Type
                            </th>
                            <th class="type">
                                Level
                            </th>
                            <th class="freshness">
                                Place
                            </th>
                            <th class="apply">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!-- ... end Forums Table -->
            </div>

        </div>
    </div>
</div>

    <!-- View Job Popup -->

    <div class="modal fade" id="edit-my-poll-popup" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
        <div class="modal-dialog window-popup edit-my-poll-popup" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-body">
                    <div class="control-block-button post-control-button">
                        <a href="#" class="btn btn-control has-i bg-facebook">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="btn btn-control has-i bg-twitter">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="edit-my-poll-head bg-primary">
                        <div class="head-content">
                            <h2 class="title"></h2>
                            <div class="place inline-items">
                                <svg class="olymp-add-a-place-icon">
                                    <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-add-a-place-icon"></use>
                                </svg>
                                <span id="city"></span>
                                <span id="type"></span>
                            </div>
                        </div>

                        <img class="poll-img" src="{{ asset('img/poll.png') }}" alt="screen">
                    </div>

                    <div class="edit-my-poll-content">
                        <div id="description-job" class="description-job">
                        </div>

                        <form class="resume-form" method="post" action="{{ route('job_application.create') }}" enctype="multipart/form-data">
                            @csrf
                            <h3>Submit Application</h3>
                            <div class="row">
                                <input type="text" hidden id="job_id" name="job_id">
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Your Resume / CV</label>
                                        <input class="form-control" type="file" id="resume" name="resume" value="">
                                        <small>File size must not exceed 5MB.</small>
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Why we should hire you</label>
                                        <textarea class="form-control" placeholder="" id="description" name="description"></textarea>
                                    </div>
                                    <button class="btn btn-primary btn-lg full-width" type="submit">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ... end Search Widget -->

    <script>
        $('document').ready(function () {
            searchJob('');
        });

        function searchJob(query) {
            $.ajax({
                url: '{{ route('search.filter') }}',
                method: 'get',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function (response) {
                    $('tbody').html(response.table_data);
                    console.log(response);
                }
            });
        }

        function liveSearch() {
            let query = document.getElementById('search_bar').value;
            console.log(query);
            searchJob(query);
        }

        function apply(id)
        {
            $('#description').empty();
            $.ajax({
                url: '{{ route('job.show') }}',
                method: 'get',
                data: {
                    jobId: id
                },
                success: function (response) {
                    $('#edit-my-poll-popup').bind('show.bs.modal', function() {
                        $("#job_id").val(id);
                        $("h2.title").html(response[0].title);
                        $("span#city").html((response[0].city + ', ' + response[0].country).toUpperCase());
                        $("span#type").html((response[1].name + ' &#8226; ' + response[2].name).toUpperCase());
                        $("#description-job").html(response[0].description);
                    });
                    $('#edit-my-poll-popup').modal();
                    console.log(response);
                }
            })
        }
    </script>

@endsection
