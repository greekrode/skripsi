<header class="header header-responsive" id="site-header-responsive">

    <div class="header-content-wrapper">
        <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
            <li class="nav-item">
                @if (Auth::user()->type === 'user')
                    <a class="nav-link" href="{{ route('search.job') }}" style="fill: #ffffff;" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                        </div>
                    </a>
                @else
                    <a class="nav-link" href="{{ route('search.user') }}" style="fill: #ffffff;" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{ asset('svg/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                        </div>
                    </a>
                @endif
            </li>
        </ul>
    </div>


</header>
