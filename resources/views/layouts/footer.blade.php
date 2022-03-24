<footer class="bg_img padding-top oh" data-background="{{ asset('frontend') }}/assets/images/footer/footer-bg.jpg">
    <div class="footer-top-shape">
        <img src="{{ asset('frontend') }}/assets/css/img/footer-top-shape.png" alt="css">
    </div>
    <div class="anime-wrapper">
        <div class="anime-1 plus-anime">
            <img src="{{ asset('frontend') }}/assets/images/footer/p1.png" alt="footer">
        </div>
        <div class="anime-2 plus-anime">
            <img src="{{ asset('frontend') }}/assets/images/footer/p2.png" alt="footer">
        </div>
        <div class="anime-3 plus-anime">
            <img src="{{ asset('frontend') }}/assets/images/footer/p3.png" alt="footer">
        </div>
        <div class="anime-5 zigzag">
            <img src="{{ asset('frontend') }}/assets/images/footer/c2.png" alt="footer">
        </div>
        <div class="anime-6 zigzag">
            <img src="{{ asset('frontend') }}/assets/images/footer/c3.png" alt="footer">
        </div>
        <div class="anime-7 zigzag">
            <img src="{{ asset('frontend') }}/assets/images/footer/c4.png" alt="footer">
        </div>
    </div>
    <div class="newslater-wrapper">
        <div class="container">
            <div class="newslater-area">
                <div class="newslater-thumb">
                    <img src="{{ asset('frontend') }}/assets/images/footer/newslater.png" alt="footer">
                </div>
                <div class="newslater-content">
                    <div class="section-header left-style mb-low">
                        <h5 class="cate">Subscribe to The Auction Leader</h5>
                        <h3 class="title">To Get Exclusive Benefits</h3>
                    </div>
                    <form class="subscribe-form">
                        <input type="text" placeholder="Enter Your Email" name="email">
                        <button type="submit" class="custom-button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top padding-bottom padding-top">
        <div class="container">
            <div class="row mb--60">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <h5 class="title">Auction Categories</h5>
                        <ul class="links-list">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{route('category', $category->slug)}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <h5 class="title">About Us</h5>
                        <ul class="links-list">
                            <li>
                                <a href="#0">About The Auction Leader</a>
                            </li>
                            <li>
                                <a href="#0">Help</a>
                            </li>
                            <li>
                                <a href="#0">Affiliates</a>
                            </li>
                            <li>
                                <a href="#0">Jobs</a>
                            </li>
                            <li>
                                <a href="#0">Press</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <h5 class="title">We're Here to Help</h5>
                        <ul class="links-list">
                            <li>
                                <a href="#0">Your Account</a>
                            </li>
                            <li>
                                <a href="#0">Safe and Secure</a>
                            </li>
                            <li>
                                <a href="#0">Shipping Information</a>
                            </li>
                            <li>
                                <a href="#0">Contact Us</a>
                            </li>
                            <li>
                                <a href="#0">Help & FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-follow">
                        <h5 class="title">Follow Us</h5>
                        <ul class="links-list">
                            <li>
                                <a href="#0"><i class="fas fa-phone-alt"></i>{{$setting->mobile_no ?? ''}}</a>
                            </li>
                            <li>
                                <a href="#0"><i class="fas fa-blender-phone"></i>{{$setting->telephone_no ?? ''}}</a>
                            </li>
                            <li>
                                <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__"
                                        data-cfemail="9df5f8f1edddf8f3faf2e9f5f8f0f8b3fef2f0">{{$setting->email ?? ''}}</span></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fas fa-location-arrow"></i>{{$setting->address ?? ''}}</a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="{{$setting->facebook_link ?? '#'}}" class="active"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting->twitter_link  ?? '#'}}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting->instagram_link  ?? '#'}}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{$setting->linkedin_link  ?? '#'}}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright-area">
                <div class="footer-bottom-wrapper">
                    <div class="logo">
                        <a href="{{route('hompage')}}"><img src="{{ asset('frontend') }}/assets/images/auction-leader.png"
                                alt="logo" style="max-height: 50px"></a>
                    </div>
                    {{-- <ul class="gateway-area">
                        <li>
                            <a href="#0"><img src="{{ asset('frontend') }}/assets/images/footer/paypal.png"
                                    alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{ asset('frontend') }}/assets/images/footer/visa.png"
                                    alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{ asset('frontend') }}/assets/images/footer/discover.png"
                                    alt="footer"></a>
                        </li>
                        <li>
                            <a href="#0"><img src="{{ asset('frontend') }}/assets/images/footer/mastercard.png"
                                    alt="footer"></a>
                        </li>
                    </ul> --}}
                    <div class="copyright">
                        <p>&copy; Copyright @php echo date('Y'); @endphp | <a href="{{ route('hompage') }}">The Auction Leader</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--============= Footer Section Ends Here =============-->



{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script src="{{ asset('frontend') }}/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/modernizr-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/waypoints.js"></script>
<script src="{{ asset('frontend') }}/assets/js/nice-select.js"></script>
<script src="{{ asset('frontend') }}/assets/js/counterup.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/owl.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/yscountdown.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/main.js"></script>
