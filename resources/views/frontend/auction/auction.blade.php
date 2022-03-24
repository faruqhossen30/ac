@extends('layouts.app')
@section('content')
<div class="hero-section style-2">
    <div class="container">
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
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend')}}/assets/images/banner/hero-bg.png" style="background-image: url(&quot;assets/images/banner/hero-bg.png&quot;);"></div>
</div>
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container">
        <div class="section-header cl-white mw-100 left-style">
            <h3 class="title">Bid on These Featured Auctions!</h3>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/car/auction-1.jpg" alt="car"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2018 Hyundai Sonata</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter26">0d  : 12h  : 11m  : 58s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/car/auction-1.jpg" alt="car"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2018 Hyundai Sonata</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter26">0d  : 12h  : 11m  : 58s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/car/auction-1.jpg" alt="car"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2018 Hyundai Sonata</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter26">0d  : 12h  : 11m  : 58s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/car/auction-1.jpg" alt="car"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2018 Hyundai Sonata</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter26">0d  : 12h  : 11m  : 58s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="product-auction padding-bottom">
    <div class="container">
        <div class="product-header mb-40">
            <div class="product-header-item">
                <div class="item">Sort By : </div>
                <select name="sort-by" class="select-bar" style="display: none;">
                    <option value="all">All</option>
                    <option value="name">Name</option>
                    <option value="date">Date</option>
                    <option value="type">Type</option>
                    <option value="car">Car</option>
                </select><div class="nice-select select-bar" tabindex="0"><span class="current">All</span><ul class="list"><li data-value="all" class="option selected">All</li><li data-value="name" class="option">Name</li><li data-value="date" class="option">Date</li><li data-value="type" class="option">Type</li><li data-value="car" class="option">Car</li></ul></div>
            </div>
            <div class="product-header-item">
                <div class="item">Show : </div>
                <select name="sort-by" class="select-bar" style="display: none;">
                    <option value="09">09</option>
                    <option value="21">21</option>
                    <option value="30">30</option>
                    <option value="39">39</option>
                    <option value="60">60</option>
                </select><div class="nice-select select-bar" tabindex="0"><span class="current">09</span><ul class="list"><li data-value="09" class="option selected">09</li><li data-value="21" class="option">21</li><li data-value="30" class="option">30</li><li data-value="39" class="option">39</li><li data-value="60" class="option">60</li></ul></div>
            </div>
            <form class="product-search ml-auto">
                <input type="text" placeholder="Item Name">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="row mb-30-none justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/01.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2019 Mercedes-Benz C, 300</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter1">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/02.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2017 Harley-Davidson XG750,</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter2">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/03.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2021 Hyundai Elantra, Sel</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter3">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/04.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2014 KIA Sorento, LX</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter4">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/05.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2019 Subaru Crosstrek, Premium</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter5">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/06.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2019 Chevrolet Equinox, LT</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter6">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/07.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2019 Ford Expedition</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter7">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/08.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2019 Buick Envision</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter8">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/product/09.png" alt="product"></a>
                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                    </div>
                    <div class="auction-content">
                        <h6 class="title">
                            <a href="#0">2018 Dodge Grand, Sxt</a>
                        </h6>
                        <div class="bid-area">
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Current Bid</div>
                                    <div class="amount">$876.00</div>
                                </div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Buy Now</div>
                                    <div class="amount">$5,00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="countdown-area">
                            <div class="countdown">
                                <div id="bid_counter9">0d  : 11h  : 58m  : 25s</div>
                            </div>
                            <span class="total-bids">30 Bids</span>
                        </div>
                        <div class="text-center">
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pagination">
            <li>
                <a href="#0"><i class="flaticon-left-arrow"></i></a>
            </li>
            <li>
                <a href="#0">1</a>
            </li>
            <li>
                <a href="#0" class="active">2</a>
            </li>
            <li>
                <a href="#0">3</a>
            </li>
            <li>
                <a href="#0"><i class="flaticon-right-arrow"></i></a>
            </li>
        </ul>
    </div>
</div>
@endsection

