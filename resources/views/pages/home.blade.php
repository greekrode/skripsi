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
            <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Hobbies and Interests</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Hobbies:</span>
                                        <span class="text">I like to ride the bike to work, swimming, and working out. I also like
															reading design magazines, go to museums, and binge watching a good tv show while it’s raining outside.
														</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite TV Shows:</span>
                                        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Movies:</span>
                                        <span class="text">Idiocratic, The Scarred Wizard and the Fire Crown,  Crime Squad, Ferrum Man. </span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Games:</span>
                                        <span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last Cause 4, Grand Snatch Auto. </span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Favourite Music Bands / Artists:</span>
                                        <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Books:</span>
                                        <span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and Water.</span>
                                    </li>
                                    <li>
                                        <span class="title">Favourite Writers:</span>
                                        <span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria Platt, Marcus Roth. </span>
                                    </li>
                                    <li>
                                        <span class="title">Other Interests:</span>
                                        <span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos, Street Art.</span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Education and Employement</h6>
                        <a href="#" class="more" data-toggle="modal" data-target="#create-education"><svg class="olymp-plus-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-plus-icon"></use></svg></a>

                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">The New College of Design</span>
                                        <span class="date">2001 - 2006</span>
                                        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                    </li>
                                    <li>
                                        <span class="title">Rembrandt Institute</span>
                                        <span class="date">2008</span>
                                        <span class="text">Five months Digital Illustration course. Professor: Leonardo Stagg.</span>
                                    </li>
                                    <li>
                                        <span class="title">The Digital College </span>
                                        <span class="date">2010</span>
                                        <span class="text">6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle. </span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->

                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                                <!-- W-Personal-Info -->

                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Digital Design Intern</span>
                                        <span class="date">2006-2008</span>
                                        <span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>
                                    </li>
                                    <li>
                                        <span class="title">UI/UX Designer</span>
                                        <span class="date">2008-2013</span>
                                        <span class="text">UI/UX Designer for the “Daydreams” agency. </span>
                                    </li>
                                    <li>
                                        <span class="title">Senior UI/UX Designer</span>
                                        <span class="date">2013-Now</span>
                                        <span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>
                                    </li>
                                </ul>

                                <!-- ... end W-Personal-Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Personal Info</h6>
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
                                <span class="title">Occupation:</span>
                                <span class="text">{{ $user->occupation }}</span>
                            </li>
                            <li>
                                <span class="title">Faculty:</span>
                                <span class="text">{{ $user->faculty->name }}</span>
                            </li>
                            <li>
                                <span class="title">Major:</span>
                                <span class="text">{{ $user->major->name }}</span>
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
                            <a href="{{ $user->facebook }}" class="social-item bg-facebook">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                Facebook
                            </a>
                            <a href="https://twitter.com/{{ $user->twitter }}" class="social-item bg-twitter">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                Twitter
                            </a>
                            <a href="https://instagram.com/{{ $user->instagram }}" class="social-item bg-instagram">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                Instagram
                            </a>
                            <a href="{{ $user->linked_in }}" class="social-item bg-linkedin">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                LinkedIn
                            </a>
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
                    <div class="form-group label-floating is-select">
                        <label class="control-label">Personal Event</label>
                        <select class="selectpicker form-control">
                            <option value="MA">Private Event</option>
                            <option value="FE">Personal Event</option>
                        </select>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Event Name</label>
                        <input class="form-control" placeholder="" value="Take Querty to the Veterinarian" type="text">
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Event Location</label>
                        <input class="form-control" placeholder="" value="" type="text">
                    </div>

                    <div class="form-group date-time-picker label-floating">
                        <label class="control-label">Event Date</label>
                        <input name="datetimepicker" value="26/03/2016">
                        <span class="input-group-addon">
					<svg class="olymp-calendar-icon icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-calendar-icon"></use></svg>
				</span>
                    </div>

                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Event Time</label>
                                <input class="form-control" placeholder="" value="09:00" type="text">
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="form-group label-floating is-select">
                                <label class="control-label">AM-PM</label>
                                <select class="selectpicker form-control">
                                    <option value="MA">AM</option>
                                    <option value="FE">PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-select">
                                <label class="control-label">Timezone</label>
                                <select class="selectpicker form-control">
                                    <option value="MA">US (UTC-8)</option>
                                    <option value="FE">UK (UTC-0)</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">Event Description</label>
                        <textarea class="form-control" placeholder="">I need to take Querty for a check up and ask the doctor if he needs a new tank.
					</textarea>
                    </div>

                    <form class="form-group label-floating is-select">
                        <svg class="olymp-happy-face-icon">
                            <use xlink:href="{{ asset('svg/icons.svg') }}#olymp-happy-face-icon"></use>
                        </svg>

                        <select class="selectpicker form-control style-2 show-tick" multiple data-live-search="true">
                            <option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
                            </option>

                            <option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
                            </option>

                            <option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
                            </option>

                            <option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
                            </option>

                            <option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
                            </option>

                        </select>
                    </form>

                    <button class="btn btn-breez btn-lg full-width">Create Event</button>

                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Education -->



    <!-- Window-popup Choose from my Photo -->

    <div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
        <div class="modal-dialog window-popup choose-from-my-photo" role="document">

            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Choose from My Photos</h6>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                                <svg class="olymp-photos-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-photos-icon"></use></svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                                <svg class="olymp-albums-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-albums-icon"></use></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo1.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo2.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo3.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo4.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo5.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo6.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo7.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo8.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img src="img/choose-photo9.jpg" alt="photo">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo10.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">South America Vacations</a>
                                        <span>Last Added: 2 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo11.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">Photoshoot Summer 2016</a>
                                        <span>Last Added: 5 weeks ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo12.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">Amazing Street Food</a>
                                        <span>Last Added: 6 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo13.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">Graffity & Street Art</a>
                                        <span>Last Added: 16 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo14.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">Amazing Landscapes</a>
                                        <span>Last Added: 13 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item" data-mh="choose-item">
                                <figure>
                                    <img src="img/choose-photo15.jpg" alt="photo">
                                    <figcaption>
                                        <a href="#">The Majestic Canyon</a>
                                        <span>Last Added: 57 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ... end Window-popup Choose from my Photo -->


    <a class="back-to-top" href="#">
        <img src="svg/back-to-top.svg" alt="arrow" class="back-icon">
    </a>




    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title" >Chat</h6>
                <div class="more">
                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg>
                    <svg class="olymp-little-delete js-chat-open"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-little-delete"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Press enter to post...</label>
                        <textarea class="form-control" placeholder=""></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-computer-icon"></use></svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-happy-sticker-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat1.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat2.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat3.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat4.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat5.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat6.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat7.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat8.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat9.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat10.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat11.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat12.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat13.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat14.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat15.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat16.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat17.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat18.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat19.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat20.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat21.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat22.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat23.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat24.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat25.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat26.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/icon-chat27.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

@endsection
