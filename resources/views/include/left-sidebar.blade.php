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
                    @if (Auth::user()->type === 'user')
                        <a href={{ route('search.job') }}>
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="JOB SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                        </a>
                    @else
                        <a href={{ route('search.user') }}>
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="USER SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('job_application.show') }}">
                        <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="JOB APPLICATIONS"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-star-icon"></use></svg>
                    </a>
                </li>
                @if (Auth::user()->type === 'company')
                <li>
                    <a href="{{ route('stats.index') }}">
                        <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-stats-icon"></use></svg>
                    </a>
                </li>
                @endif
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
                    @if (Auth::user()->type === 'user')
                        <a href={{ route('search.job') }}>
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="JOB SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                            <span class="left-menu-title">Job Search</span>
                        </a>
                    @else
                        <a href={{ route('search.user') }}>
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="USER SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                            <span class="left-menu-title">User Search</span>
                        </a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('job_application.show') }}">
                        <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="JOB APPLICATION"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-star-icon"></use></svg>
                        <span class="left-menu-title">Job Application</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stats.index') }}">
                        <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-stats-icon"></use></svg>
                        <span class="left-menu-title">Stats</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
