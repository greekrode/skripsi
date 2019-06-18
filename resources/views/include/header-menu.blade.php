<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="/"  class="logo">
                <div class="img-wrap">
                    <img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Alumni UPH" width="120">
                    {{--<img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored">--}}
                </div>
                <div class="title-block">
                    <h6 class="logo-title">alumni uph</h6>
                    <div class="sub-title">SOCIAL NETWORK</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-menu-icon"></use></svg>
            </a>

            <div class="nav nav-pills nav1 header-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('job.search') }}" class="nav-link">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.search') }}" class="nav-link">Users</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Reach Us</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
                                <a class="dropdown-item" href="#">About Us</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Regulations</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Terms & Conditions</a>
                                <a class="dropdown-item" href="#">FAQs</a>
                                <a class="dropdown-item" href="#">Privacy Policy</a>
                            </div>
                        </li>
                        <li class="close-responsive-menu js-close-responsive-menu">
                            <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                        </li>
                        <li class="nav-item js-expanded-menu">
                            <a href="#" class="nav-link">
                                <svg class="olymp-menu-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-menu-icon"></use></svg>
                                <svg class="olymp-close-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-close-icon"></use></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
