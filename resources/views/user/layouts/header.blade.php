    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="customer-support">
                        <li>
                            <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span
                                    class="ml-2 d-none d-sm-inline-block">+88 02477763843</span></a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <select name="language" class="select-bar">
                                <option value="en">English</option>
                                <option value="Bn">বাংলা</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="nav">
                        @guest
                        <li class="nav-item" style="padding: .3rem">
                            <a class="nav-link" href="{{ route('login') }}"
                                style="font-size: 14px; color:white; padding:0">LOGIN</a>
                        </li>
                        <li class="nav-item" style="padding: .3rem">
                            <a class="nav-link" href="{{ route('register') }}"
                                style="font-size: 14px; color:white; padding:0">| REGISTER</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item" style="padding: .3rem">
                            <a class="nav-link" href="{{ route('user.dashboard') }}"
                                style="font-size: 14px; color:white; padding:0">My Account</a>
                        </li>

                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{route('hompage')}}">
                            <img src="{{asset('frontend')}}/assets/images/auction-leader.png" alt="logo" style="max-height: 50px; width:auto">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{route('hompage')}}">Home</a>
                            <ul class="submenu">
                                <li>
                                    <a href="index.html">Home Page One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html">Auction</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form white">
                        <input type="text" placeholder="Search for brand, model....">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->
