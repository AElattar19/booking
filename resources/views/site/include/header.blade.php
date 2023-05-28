<header id="header-container" class="fixed fullwidth dashboard">

    <!-- Header -->
    <div id="header" class="not-sticky">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('/') }}"><img src="{{asset('front/assets/images/logo.png') }}" alt=""></a>
                </div>

                <!-- Mobile Navigation -->
                <div class="menu-responsive">
                    <i class="fa fa-reorder menu-trigger"></i>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side">
                <!-- Header Widget -->
                <div class="header-widget">

                    <!-- User Menu -->
                    <div class="user-menu">
                        <div class="user-name">
                        <span>
                            @if(auth()->guard('user')->user()->photo)
                            <img src="{{ asset('images/profile/'). auth()->guard('user')->user()->photo }}">
                            @else 
                            <img src="{{asset('images/profile/no_photo.png')}}" alt="User Image">
                            @endif
                        </span>{{ Auth()->guard('user')->user()->name }}</div>
                        <ul>
                            <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                            <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                            <li><a href="{{ route('profile.edit') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                            <li><a href="{{ (route('auth.logout')) }}" onclick=" return confirm('Are You sure you want to logout?');"><i class="sl sl-icon-power"></i> Logout</a></li>
                        </ul>
                    </div>
                    <nav id="navigation" class="top-menu">
                        <ul id="responsive">
                            <li><a class="current" href="#">Host </a></li>
                            <li><a class="current" href="#">Trips </a></li>
                            <li><a class="current" href="#">Help </a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>