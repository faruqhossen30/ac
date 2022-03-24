@extends('layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section style-2">
        {{-- <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#0">Pages</a>
                </li>
                <li>
                    <span>Vehicles</span>
                </li>
            </ul>
        </div> --}}
        <div class="bg_img hero-bg bottom_center"
            data-background="{{ asset('frontend') }}/assets/images/banner/hero-bg.png">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Product Details Section Starts Here =============-->
    <section class="product-details padding-bottom mt--240 mt-lg--440">
        <div class="container">
            <div class="product-details-slider-top-wrapper">
                <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                    @foreach ($product->medias as $media)
                        <div class="slide-top-item">
                            <div class="slide-inner">
                                <img src="{{ $media->url }}" style="max-height:80vh; width:auto; margin:auto">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product-details-slider-wrapper">
                <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                    @foreach ($product->medias as $media)
                        <div class="slide-bottom-item">
                            <div class="slide-inner">
                                <img src="{{ $media->url }}" alt="product">
                            </div>
                        </div>
                    @endforeach
               </div>
                <span class="det-prev det-nav">
                    <i class="fas fa-angle-left"></i>
                </span>
                <span class="det-next det-nav active">
                    <i class="fas fa-angle-right"></i>
                </span>
            </div>
            <div class="row mt-40-60-80">
                <div class="col-lg-8">
                    <div class="product-details-content">
                        <div class="product-details-header">
                            <h2 class="title">{{ $product->title }}</h2>
                            <ul>
                                {{-- <li>Listing ID: 14076242</li> --}}
                                <li>Item #: {{ $product->item_number }}</li>
                            </ul>
                        </div>
                        <ul class="price-table mb-30">
                            @if ($last_bid_price)
                                <li class="header">
                                    <h5 class="current">Last Proposal Price</h5>
                                    <h3 class="price">TK ৳{{ $last_bid_price }}</h3>
                                </li>
                            @endif
                            @if (!$last_bid_price)
                                <li class="header">
                                    <h5 class="current">Be a first participent:</h5>
                                    <h3 class="price">TK ৳{{ $product->minimum_bid_price }}</h3>
                                </li>
                            @endif

                            <li>
                                <span class="details">Start Price</span>
                                <h5 class="info">৳{{ $product->minimum_bid_price }}</h5>
                            </li>
                            <li>
                                <span class="details">Please Increment at least (TK)</span>
                                <h5 class="info">৳100</h5>
                            </li>
                        </ul>
                        <div class="product-bid-area">

                            <form action="{{ route('bid.store', $product->slug) }}" method="POST" class="product-bid-form"
                                id="bidForm">
                                @csrf
                                <div class="search-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/product/search-icon.png"
                                        alt="product">
                                </div>
                                <div>
                                    <input type="number" data-productid="{{ $product->id }}" name="bid_price"
                                        placeholder="Enter proposal pirce" class="">
                                    @error('bid_price')
                                        <p class="ml-4 text-danger text-bold">Error: Please enter your proposal price</p>
                                    @enderror

                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="custom-button">Submit Proposal</button>
                            </form>
                        </div>
                        <div class="buy-now-area">
                            {{-- <a href="#0" class="custom-button">Buy Now: $4,200</a> --}}
                            <a href="#0" class="rating custom-button active border"><i class="fas fa-star"></i> Add to
                                Wishlist</a>
                            <div class="share-area">
                                <span>Share to:</span>
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-sidebar-area">
                        <div class="product-single-sidebar mb-3">
                            <h6 class="title">This Auction Ends in:</h6>
                            <div class="countdown">
                                <div id="singleProductCounter"
                                    data-enddate="{{ date_format($product->end_date, 'Y/m/d') }}"></div>
                            </div>
                            <div class="side-counter-area">
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/product/icon1.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span class="counter">61</span></h3>
                                        <p>Active Buyers</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/product/icon2.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span
                                                class="counter">{{ $product->total_view }}</span></h3>
                                        <p>Watching</p>
                                    </div>
                                </div>
                                <div class="side-counter-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/product/icon3.png" alt="product">
                                    </div>
                                    <div class="content">
                                        <h3 class="count-title"><span
                                                class="counter">{{ $product->total_submit }}</span></h3>
                                        <p>Total Submited Proposals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-menu-area mb-40-60 mt-70-100">
            <div class="container">
                <ul class="product-tab-menu nav nav-tabs">
                    <li>
                        <a href="#details" class="active" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/images/product/tab1.png" alt="product">
                            </div>
                            <div class="content">Description</div>
                        </a>
                    </li>
                    <li>
                        <a href="#delevery" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/images/product/comments.png" alt="product">
                            </div>
                            <div class="content">Comments</div>
                        </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/images/product/tab3.png" alt="product">
                            </div>
                            <div class="content">Proposal History (36)</div>
                        </a>
                    </li>
                    <li>
                        <a href="#questions" data-toggle="tab">
                            <div class="thumb">
                                <img src="{{ asset('frontend') }}/assets/images/product/tab4.png" alt="product">
                            </div>
                            <div class="content">Questions </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="details">
                    <div class="tab-details-content">
                        <div class="header-area">
                            <h3 class="title">{{ $product->title }}</h3>
                            <div class="item">
                                <table class="product-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Category:</th>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Subcategory:</th>
                                            <td>{{ $product->subcategory->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Auction Start:</th>
                                            <td>{{ $product->start_date->format('d M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Auction End:</th>
                                            <td>{{ $product->end_date->format('d M Y') }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="item">
                                {!! $product->description !!}
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="delevery">
                    <div class="shipping-wrapper">
                        <div class="item" style="width: 50%">
                            @comments(['model' => $product])
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="history">
                    <div class="history-wrapper">
                        <div class="item">
                            <h5 class="title">Proposal History</h5>
                            <div class="history-table-area">
                                <table class="history-table">
                                    <thead>
                                        <tr>
                                            <th>Participant</th>
                                            <th>date</th>
                                            <th>time</th>
                                            <th>unit price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend') }}/assets/images/history/01.png"
                                                            alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Moses Watts
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend') }}/assets/images/history/02.png"
                                                            alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Pat Powell
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend') }}/assets/images/history/03.png"
                                                            alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Jack Rodgers
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend') }}/assets/images/history/04.png"
                                                            alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Arlene Paul
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                        <tr>
                                            <td data-history="bidder">
                                                <div class="user-info">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend') }}/assets/images/history/05.png"
                                                            alt="history">
                                                    </div>
                                                    <div class="content">
                                                        Marcia Clarke
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-history="date">06/16/2021</td>
                                            <td data-history="time">02:45:25 PM</td>
                                            <td data-history="unit price">$900.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3 mt-4">
                                    <a href="#0" class="button-3">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="questions">
                    <h5 class="faq-head-title">Frequently Asked Questions</h5>
                    <div class="faq-wrapper">
                        <div class="faq-item">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">How to attend auction?</span><span
                                    class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">Security Deposit / participant Power </span><span
                                    class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">Delivery time to the destination port </span><span
                                    class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">How to register to proposal in an auction?</span><span
                                    class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                        <div class="faq-item open active">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">How will I know if my proposal was successful?</span><span
                                    class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-title">
                                <img src="{{ asset('frontend') }}/assets/css/img/faq.png" alt="css"><span
                                    class="title">What happens if I proposal on the wrong
                                    lot?</span><span class="right-icon"></span>
                            </div>
                            <div class="faq-content">
                                <p>All successful participant can confirm their winning auction by checking the “The Auction
                                    Leader”. In
                                    addition, all successful participant will receive an email notifying them of their
                                    winning
                                    auction after the auction closes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--============= Product Details Section Ends Here =============-->
@endsection

@push('style')
    <style>
        .hero-section {
            position: relative;
            padding: 190px 0 380px;
            overflow: hidden;
        }

    </style>
@endpush
@push('script')
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script>
        $(function() {
            var productID = $('input[name="bid_price"]').data('productid');
            console.log(productID);
            $.validator.addMethod("checkMinimumBidPrice",
                function(value, element) {
                    var result = false;
                    $.ajax({
                        type: "GET",
                        async: false,
                        url: "/checkminimumbidprice", // script to validate in server side
                        data: {
                            bid_price: value,
                            id: productID
                        },
                        success: function(data) {
                            result = (data == true) ? true : false;
                            console.log(data);
                        }
                    });
                    // return true if username is exist in database
                    return result;
                }
            );
            $('#bidForm').validate({
                rules: {
                    bid_price: {
                        required: true,
                        checkMinimumBidPrice: true
                    }
                },
                messages: {
                    bid_price: {
                        required: "Please Enter Your Proposal Price. ( ৳ )",
                        checkMinimumBidPrice: "Apni kom taka diyecen"
                    }
                },
                errorElement: 'p',
                errorClass: 'ml-4 text-danger text-bold pl-3'

            });
        });
    </script>
@endpush
