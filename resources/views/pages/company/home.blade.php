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
                        <h4 class="title">Jobs</h4>
                        <a href="{{ route('job.create') }}" class="more"><svg class="olymp-plus-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-plus-icon"></use></svg></a>

                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    @foreach ($user->jobs as $job)
                                        @if ($loop->first)
                                            <li>
                                                <span class="title-edu">{{ $job->title }}</span>
                                                <span class="edit-edu">
                                                    <a href="#" onclick="showJob({{ $job->id }})">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a id="edit-edu" href="{{ route('job.edit', $job->id) }}">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                   <a href="{{ route('employment.destroy', $job->id)}}"
                                                      onclick="event.preventDefault();
                                                        document.getElementById('delete-emp-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-emp-form" action="{{ route('job.destroy', $job->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
                                                <span class="sub-title">{{ $job->city.', '.$job->country }}</span>
                                                <span class="sub-title">{{ $job->type->name }} &#8226; {{ $job->seniority->name }}</span>
                                                <span class="date">Posted at {{ date_format($job->created_at,'M jS, Y') }}</span>
                                                <span class="text">{{ $job->industry }}</span>
                                            </li>
                                        @else
                                            <li class="edu-hover">
                                                <span class="title-edu">{{ $job->title }}</span>
                                                <span class="edit-edu">
                                                    <a href="#" onclick="showJob({{ $job->id }})">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a id="edit-edu" href="{{ route('job.edit', $job->id) }}">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="{{ route('employment.destroy', $job->id)}}"
                                                       onclick="event.preventDefault();
                                                        document.getElementById('delete-emp-form').submit();">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete-emp-form" action="{{ route('job.destroy', $job->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </span>
                                                <span class="sub-title">{{ $job->city.', '.$job->country }}</span>
                                                <span class="sub-title">{{ $job->type->name }} &#8226; {{ $job->seniority->name }}</span>
                                                <span class="date">Posted at {{ date_format($job->created_at,'M jS, Y') }}</span>
                                                <span class="text">{{ $job->industry }}</span>
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
                                <span class="title">About Us</span>
                            </li>
                            <li>
                                <span class="text">{{ $user->about }}</span>
                            </li>
                            <li>
                                <span class="title">Year Founded</span>
                            </li>
                            <li>
                                <span class="text">{{ $user->birthday }}</span>
                            </li>
                            <li>
                                <span class="title">Address</span>
                            </li>
                            <li>
                                <span class="text">{{ $user->address.', '. $user->city.', '.$user->country }}</span>
                            </li>
                            <li>
                                <span class="title">Specialization</span>
                            </li>
                            <li>
                                <span class="text">{{ $user->occupation }}</span>
                            </li>
                            <li>
                                <span class="title">Website</span>
                            </li>
                            <li>
                                <span class="text"><a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a></span>
                            </li>
                            <li>
                                <span class="title">Email:</span>
                            </li>
                            <li>
                                <span class="text"><a href="mailto:{{ $user->email }}?Subject=Hello" target="_top">{{ $user->email }}</a></span>
                            </li>
                            <li>
                                <span class="title">Phone Number:</span>
                            </li>
                            <li>
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

    <!-- Edit My Poll Popup -->

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

                        {{--<form class="resume-form">--}}
                            {{--<h3>Submit Application</h3>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Your Name</label>--}}
                                        {{--<input class="form-control" placeholder="" value="James Spiegel" type="text">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Your Email</label>--}}
                                        {{--<input class="form-control" placeholder="" value="jspiegel@yourmail.com" type="email">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Portfolio URL</label>--}}
                                        {{--<input class="form-control" placeholder="" value="spiegelcodes.com" type="text">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
                                    {{--<div class="form-group with-button">--}}
                                        {{--<input class="form-control" placeholder="Browse Resume..." value="" type="text">--}}
                                        {{--<button class="bg-grey">--}}
                                            {{--<svg class="olymp-computer-icon">--}}
                                                {{--<use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use>--}}
                                            {{--</svg>--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
                                    {{--<div class="form-group label-floating is-empty">--}}
                                        {{--<label class="control-label">Your Comment</label>--}}
                                        {{--<textarea class="form-control" placeholder=""></textarea>--}}
                                    {{--</div>--}}
                                    {{--<a href="#" class="btn btn-primary btn-lg full-width">Submit Application</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Edit My Poll Popup -->


    <a class="back-to-top" href="#">
        <img src="{{ asset('svg/back-to-top.svg') }}" alt="arrow" class="back-icon">
    </a>

    <script>
        function showJob(id)
        {
            $.ajax({
                url: '{{ route('job.show') }}',
                method: 'get',
                data: {
                    jobId: id
                },
                success: function(response)
                {
                    $('#edit-my-poll-popup').bind('show.bs.modal', function() {
                        $("h2.title").html(response[0].title);
                        $("span#city").html((response[0].city + ', ' + response[0].country).toUpperCase());
                        $("span#type").html((response[1].name + ' &#8226; ' + response[2].name).toUpperCase());
                        $("#description-job").html(response[0].description);
                    });
                    $('#edit-my-poll-popup').modal();
                    console.log(response);
                }
            });
        }
    </script>

@endsection

