<header id="header-container">

    <!-- Header -->
    <div id="header">

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

            <div class="header-widget">
                @if(auth('user')->check())
                <div class="user-menu">
                    <div class="user-name"><span>
                        @if(auth()->guard('user')->user()->photo)
                        <img src="{{ asset('images/profile/'). auth()->guard('user')->user()->photo }}">
                    @else 
                        <img src="{{asset('images/profile/no_photo.png')}}" alt="User Image">
                    @endif
                    </span>{{ Auth()->guard('user')->user()->name }}</div>
                    <ul>
                        <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                        <li><a href="{{ (route('profile.edit')) }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                        <li><a href="{{ (route('auth.logout')) }}" onclick=" return confirm('Are You sure you want to logout?');">
                            <i class="sl sl-icon-power"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                @else
                <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                <a href="#sign-up-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-user"></i> Sign Up</a>
                @endif
                
                
                <nav id="navigation" class="top-menu">
                    <ul id="responsive">

                        <li><a class="current" href="#"> Become a Host </a>
                            <ul>
                                <li><a href="#">Host a home</a></li>
                                <li><a href="#">No item to host?</a></li>
                                <li><a href="#">Host an experience</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Right Side Content / End -->
        <div class="clearfix"></div>
        <div class="header-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Booking Bink</h2>
                        <h4>Expolore top-rated attractions, activities and more</h4>

                        <div class="main-search-input">

                            <div class="main-search-input-item">
                                <div class="input-with-icon">
                                    <i class="sl sl-icon-magnifier"></i>
                                    <input type="text" placeholder="Address?" value=""/>
                                </div>
                            </div>

                            <div class="main-search-input-item">
                                <div class="input-with-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <input type="text"  placeholder="Check In" id="checkin" data-lock="from" data-init-set="false" data-lang="en" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017">
                                </div>
                            </div>
                            <div class="main-search-input-item">
                                <div class="input-with-icon">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <input type="text"  placeholder="Check Out" id="checkout" data-lock="from" data-init-set="false" data-lang="en" data-large-mode="true" data-large-default="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017">
                                </div>
                            </div>

                            <div class="main-search-input-item">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>All Categories</option>	
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>

                            <button class="button" onclick="window.location.href = 'search.html'">Search</button>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bottom-header">
                            <ul>
                                <li><a class="active" href="products.html">Homes</a></li>
                                <li><a href="products.html">Limousine</a></li>
                                <li><a href="products.html">Traveling Offers</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Header / End -->  
        </div>
        <!-- Sign In Popup -->
        <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
            <div class="small-dialog-header">
                <h3><i class="sl sl-icon-login"></i> Sign In</h3>
            </div>
            <div class="sign-in-form style-1">
                <div class="social-login-buttons clearfix">
                    <ul class="items-login-buttons">
                        {{-- <li class="item-1">
                            <a class="btn social-login-btn social-login-btn-facebook" href="{{ route('auth.facebook') }}">
                                <i class="bf-icon fa fa-facebook"></i>Sign up with Facebook 
                            </a>
                        </li> --}}
                      

                        <li class="item-2"><a class="btn social-login-btn social-login-btn-google"><i class="bf-icon fa fa-google-plus"></i>Google </a></li>
                        <li class="item-3"><a class="btn social-login-btn social-login-btn-twitter"><i class="bf-icon fa fa-twitter"></i>Twitter </a></li>
                    </ul>
                    <div class="or-wrapper"><span class="or-text">Or</span> </div>
                </div>
                <form method="post" class="login" action="{{ route('login') }}"> 
                    @csrf
                    <p class="form-row form-row-wide">
                        <label for="username">email:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="email" id="email" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password" id="password"/>
                        </label>
                        <span class="lost_password">
                            <a href="#" >Lost Your Password?</a>
                        </span>
                    </p>

                    <div class="form-row">
                        <input type="submit" class="button border margin-top-5"  value="Login" />
                        <div class="checkboxes margin-top-10">
                            <input id="remember-me" type="checkbox" name="check">
                            <label for="remember-me">Remember Me</label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- Sign In Popup / End -->

        <!-- Sign Up Popup -->
        <div id="sign-up-dialog" class="zoom-anim-dialog mfp-hide">
            <div class="small-dialog-header">
                <h3><i class="sl sl-icon-user"></i> Sign Up</h3>
            </div>
            <div class="sign-in-form style-1">
                <div class="social-login-buttons clearfix">
                    <ul class="items-login-buttons">
                        <li class="item-1">
                            <a class="btn social-login-btn social-login-btn-facebook"><i class="bf-icon fa fa-facebook"></i>Sign up with Facebook </a></li>
                        <li class="item-2"><a class="btn social-login-btn social-login-btn-google"><i class="bf-icon fa fa-google-plus"></i>Google </a></li>
                        <li class="item-3"><a class="btn social-login-btn social-login-btn-twitter"><i class="bf-icon fa fa-twitter"></i>Twitter </a></li>
                    </ul>
                    <div class="or-wrapper"><span class="or-text">Or</span> </div>
                </div>
                <form method="post" class="register">

                    <p class="form-row form-row-wide">
                        <label for="username2">Username:
                            <i class="im im-icon-Male"></i>
                            <input type="text" class="input-text" name="username" id="username2" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="email2">Email Address:
                            <i class="im im-icon-Mail"></i>
                            <input type="text" class="input-text" name="email" id="email2" value="" />
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password1">Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password1" id="password1"/>
                        </label>
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="password2">Repeat Password:
                            <i class="im im-icon-Lock-2"></i>
                            <input class="input-text" type="password" name="password2" id="password2"/>
                        </label>
                    </p>

                    <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />

                </form>
            </div>
        </div>
        <!-- Sign Up Popup / End -->
    </div>
</header>