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
                @if (Auth::user()->type === 'user')
                    <a href="{{ route('search.job') }}" style="fill: #ffffff;">
                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                    </a>
                @else
                    <a href="{{ route('search.user') }}" style="fill: #ffffff;">
                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                    </a>
                @endif

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
