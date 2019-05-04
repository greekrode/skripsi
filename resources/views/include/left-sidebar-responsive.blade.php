<div class="fixed-sidebar fixed-sidebar-responsive">

    <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
        <a href="#" class="logo js-sidebar-open">
            <img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Olympus" width="120">
        </a>

    </div>

    <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
        <a href="{{ route('home') }}" class="logo">
            <div class="img-wrap">
                <img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Olympus" width="120">
            </div>
        </a>

        <div class="mCustomScrollbar" data-mcs-theme="dark">

            <div class="control-block">
                <div class="author-page author vcard inline-items">
                    <div class="author-thumb">
                        <img src="{{ Auth::user()->profile_image ? '/uploads/'.Auth::user()->profile_image : 'https://via.placeholder.com/124.png?text=Profile' }}" alt="avatar" class="avatar" width="35">
                        <span class="icon-status online"></span>
                    </div>
                    <a href="02-ProfilePage.html" class="author-name fn">
                        <div class="author-title">
                            {{ Auth::user()->first_name.' '.Auth::user()->last_name }}  <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-dropdown-arrow-icon"></use></svg>
                        </div>
                        <span class="author-subtitle">{{ Auth::user()->city.', '.Auth::user()->country}}</span>
                    </a>
                </div>
            </div>

            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">MAIN SECTIONS</h6>
            </div>

            <ul class="left-menu">
                <li>
                    <a href="#" class="js-sidebar-open">
                        <svg class="olymp-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="OPEN MENU"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-menu-icon"></use></svg>
                        <span class="left-menu-title">Collapse Menu</span>
                    </a>
                </li>
                <li>
                    <a href={{ route('search.job') }}>
                        <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="JOB SEARCH"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                        <span class="left-menu-title">Job Search</span>
                    </a>
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

            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">YOUR ACCOUNT</h6>
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

            <ul class="about-olympus">
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
