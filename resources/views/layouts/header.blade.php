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
                                    class="ml-2 d-none d-sm-inline-block">{{$setting->mobile_no ?? ''}}</span></a>
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
                        <a href="{{ route('hompage') }}">
                            <img src="{{ asset('frontend') }}/assets/images/auction-leader.png" alt="logo"
                                style="max-height: 50px; width:auto">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="{{ route('hompage') }}">Home</a>
                        </li>
                        <li>
                            <a href="#0">Category</a>
                            <ul class="submenu">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{route('category', $category->slug)}}">{{ $category->name }}</a>
                                        <ul class="submenu">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li>
                                                    <a href="{{route('subcategory', $subcategory->slug)}}">{{$subcategory->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                        <li>
                            <a href="{{ route('auction') }}">Auction</a>
                        </li>
                        <li>
                            <a href="{{route('aboutus')}}">About Us</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>

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
