<header class="header" id="site-header">

    <div class="page-title">
        <h6>@yield('header-title')</h6>
    </div>

    <div class="header-content-wrapper">
        <div class="search-bar w-search notification-list friend-requests" style="visibility: hidden;">
            <div class="form-group with-button">
                <input class="form-control" placeholder="Search here people or pages..." type="text" id="user-search">
                <button>
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                </button>
            </div>
        </div>


        <div class="control-block">

            <div class="control-icon more has-items">
                <a href="{{ route('search.job') }}" style="fill: #ffffff;">
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                </a>

            </div>

            <div class="control-icon more has-items">
                <svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
                <div class="label-avatar bg-blue">6</div>

                <div class="more-dropdown more-with-triangle triangle-top-center">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">FRIEND REQUESTS</h6>
                        <a href="#">Find Friends</a>
                        <a href="#">Settings</a>
                    </div>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="notification-list friend-requests">
                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar55-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                    <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                                </div>
                                <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar56-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                    <span class="chat-message-item">4 Friends in Common</span>
                                </div>
                                <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                </div>
                            </li>

                            <li class="accepted">
                                <div class="author-thumb">
                                    <img src="img/avatar57-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                                </div>
                                <span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
								</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar58-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                    <span class="chat-message-item">9 Friends in Common</span>
                                </div>
                                <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <a href="#" class="view-all bg-blue">Check all your Events</a>
                </div>
            </div>


            <div class="control-icon more has-items">
                <svg class="olymp-thunder-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-thunder-icon"></use></svg>

                <div class="label-avatar bg-primary">8</div>

                <div class="more-dropdown more-with-triangle triangle-top-center">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Notifications</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="notification-list">
                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar62-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-comments-post-icon"></use></svg>
									</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li class="un-read">
                                <div class="author-thumb">
                                    <img src="img/avatar63-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                </div>
                                <span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
									</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li class="with-comment-photo">
                                <div class="author-thumb">
                                    <img src="img/avatar64-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                </div>
                                <span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-comments-post-icon"></use></svg>
									</span>

                                <div class="comment-photo">
                                    <img src="img/comment-photo1.jpg" alt="photo">
                                    <span>“She looks incredible in that outfit! We should see each...”</span>
                                </div>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar65-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                </div>
                                <span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-face-icon"></use></svg>
									</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>

                            <li>
                                <div class="author-thumb">
                                    <img src="img/avatar66-sm.jpg" alt="author">
                                </div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                </div>
                                <span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-heart-icon"></use></svg>
									</span>

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-little-delete"></use></svg>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <a href="#" class="view-all bg-primary">View All Notifications</a>
                </div>
            </div>

            <div class="author-page author vcard inline-items more">
                <div class="author-thumb">
                    <img src="{{ Auth::user()->profile_image ? '/uploads/'.Auth::user()->profile_image : 'https://via.placeholder.com/124.png?text=Profile' }}" alt="avatar" class="avatar" width="35">
                    <span class="icon-status online"></span>
                    <div class="more-dropdown more-with-triangle">
                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Your Account</h6>
                            </div>

                            <ul class="account-settings">
                                <li>
                                    <a href="{{ route('account.personal.edit', ['id' => Auth::user()->id]) }}">

                                        <svg class="olymp-menu-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-menu-icon"></use></svg>

                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg class="olymp-logout-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-logout-icon"></use></svg>

                                        <span href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Log Out
                                        </span>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>


                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">About Us</h6>
                            </div>

                            <ul>
                                <li>
                                    <a href="#">
                                        <span>Terms and Conditions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>FAQs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <a href="{{ route('home') }}" class="author-name fn">
                    <div class="author-title">
                        {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-dropdown-arrow-icon"></use></svg>
                    </div>
                    <span class="author-subtitle">{{ Auth::user()->city.', '.Auth::user()->country}}</span>
                </a>
            </div>

        </div>
    </div>

</header>
