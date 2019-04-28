<div class="fixed-sidebar">
    <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

        <a href="/home" class="logo">
            <div class="img-wrap">
                <img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Olympus" width="120">
            </div>
        </a>

        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="left-menu">
                <li>
                    <a href="#" class="js-sidebar-open">
                        <svg class="olymp-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="OPEN MENU"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-menu-icon"></use></svg>
                    </a>

                </li>
                <li>
                    <a href={{ route('search.job') }}>
                        <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="JOB SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job_application.show') }}">
                        <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="JOB APPLICATIONS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-star-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="17-FriendGroups.html">
                        <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-faces-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="18-MusicAndPlaylists.html">
                        <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-headphones-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="19-WeatherWidget.html">
                        <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-weather-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="20-CalendarAndEvents-MonthlyCalendar.html">
                        <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-calendar-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="24-CommunityBadges.html">
                        <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-badge-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="25-FriendsBirthday.html">
                        <svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-cupcake-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="26-Statistics.html">
                        <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-stats-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="27-ManageWidgets.html">
                        <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-manage-widgets-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
        <a href="{{ route('home') }}" class="logo">
            <div class="img-wrap">
                <img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Olympus" width="120">
            </div>
            <div class="title-block">
                <h6 class="logo-title">olympus</h6>
            </div>
        </a>

        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="left-menu">
                <li>
                    <a href="#" class="js-sidebar-open">
                        <svg class="olymp-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="COLLAPSE MENU"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-menu-icon"></use></svg>
                        <span class="left-menu-title">Collapse Menu</span>
                    </a>
                </li>
                <li>
                    <a href={{ route('search.job') }}>
                        <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="JOB SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                        <span class="left-menu-title">Job Search</span>
                    </a>
                </li>
                @if(Auth::user()->type === 'user')
                    <li>
                        <a href="{{ route('job_application.show') }}">
                            <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="JOB APPLICATION"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-star-icon"></use></svg>
                            <span class="left-menu-title">Job Application</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('job_application.show') }}">
                            <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="JOB APPLICATION"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-star-icon"></use></svg>
                            <span class="left-menu-title">Statistics</span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="17-FriendGroups.html">
                        <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-happy-faces-icon"></use></svg>
                        <span class="left-menu-title">Friend Groups</span>
                    </a>
                </li>
                <li>
                    <a href="18-MusicAndPlaylists.html">
                        <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-headphones-icon"></use></svg>
                        <span class="left-menu-title">Music & Playlists</span>
                    </a>
                </li>
                <li>
                    <a href="19-WeatherWidget.html">
                        <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-weather-icon"></use></svg>
                        <span class="left-menu-title">Weather App</span>
                    </a>
                </li>
                <li>
                    <a href="20-CalendarAndEvents-MonthlyCalendar.html">
                        <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-calendar-icon"></use></svg>
                        <span class="left-menu-title">Calendar and Events</span>
                    </a>
                </li>
                <li>
                    <a href="24-CommunityBadges.html">
                        <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-badge-icon"></use></svg>
                        <span class="left-menu-title">Community Badges</span>
                    </a>
                </li>
                <li>
                    <a href="25-FriendsBirthday.html">
                        <svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-cupcake-icon"></use></svg>
                        <span class="left-menu-title">Friends Birthdays</span>
                    </a>
                </li>
                <li>
                    <a href="26-Statistics.html">
                        <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-stats-icon"></use></svg>
                        <span class="left-menu-title">Account Stats</span>
                    </a>
                </li>
                <li>
                    <a href="27-ManageWidgets.html">
                        <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-manage-widgets-icon"></use></svg>
                        <span class="left-menu-title">Manage Widgets</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
