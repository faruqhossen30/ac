    <!--============= Upcoming Auction Section Starts Here =============-->
    <section class="upcoming-auction padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Upcoming Auctions</h2>
                <p>You are welcome to attend and join in the action at any of our upcoming auctions.</p>
            </div>
        </div>
        <div class="filter-wrapper">
            <div class="container">
                <ul class="filter">
                    <li class="active" data-check="*">
                        <span><i class="flaticon-right-arrow"></i>All</span>
                    </li>
                    <li data-check=".live">
                        <span><i class="flaticon-auction"></i>Live Auction</span>
                    </li>
                    <li data-check=".time">
                        <span><i class="flaticon-time"></i>Time Auction</span>
                    </li>
                    <li data-check=".buy">
                        <span><i class="flaticon-bag"></i>buy now</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="m--15">
                <div class="auction-wrapper-5">
                    @php
                        $countdownserial = 1;
                    @endphp
                    @foreach ($products as $product)
                        @php
                            $media = $product->medias;
                            $image = json_decode($media);
                        @endphp
                        <div class="auction-item-5 time">
                            <!-- All Time --->
                            <div class="auction-inner">
                                <div class="upcoming-badge" title="Upcoming Auction">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="auction-thumb">
                                    <a href="{{route('singleproduct', $product->slug)}}"><img src="{{ $image[0]->url ?? '' }}" alt="{{$product->title}}"></a>
                                    <a href="{{route('singleproduct', $product->slug)}}" class="rating"><i
                                            class="far fa-star"></i></a>
                                </div>
                                <div class="auction-content">
                                    <div class="title-area">
                                        <h6 class="title">
                                            <a href="{{route('singleproduct', $product->slug)}}">{{ $product->title }}</a>
                                        </h6>
                                        <div class="list-area">
                                            <span class="list-item">
                                                <span class="list-id">Listing ID</span>14033488
                                            </span>
                                            <span class="list-item">
                                                <span class="list-id">Item #</span>{{ $product->item_number }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="bid-area">
                                        <div class="bid-inner">
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-auction"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Starting Price:</div>
                                                    <div class="amount">৳{{ $product->minimum_bid_price }}</div>
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
                                    </div>
                                    <div class="bid-count-area">
                                        <span class="item">
                                            <span class="left">Proposals</span>{{$product->total_submit}}
                                        </span>
                                        @if ($product->total_submit > 0)
                                        <span class="item">
                                            <span class="left">Last Submit </span>
                                            {{\Carbon\Carbon::parse($product->updated_at)->diffForHumans()}}
                                        </span>
                                        @else
                                        <span class="item">
                                            <span class="left">No Proposal Submited yet.</span>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="auction-bidding">
                                    <span class="bid-title">Auction ends in</span>
                                    <div class="countdown">
                                        <div id="bid_counter{{$countdownserial++}}" data-enddate="{{date_format($product->end_date, 'Y/m/d')}}"></div>
                                    </div>
                                    <div class="bid-incr">
                                        <span class="title">Increment</span>
                                        <h4>৳100</h4>
                                    </div>
                                    <a href="{{ route('singleproduct', $product->slug) }}" class="custom-button">Submit Now !</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{-- <div class="auction-item-5 live">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-2.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">14k Gold Geneve Watch,24.5g</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter4"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 buy">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-3.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">2009 Toyota Prius (Medford, NY 11763)</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter5"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 time">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-4.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">Canon EOS Rebel T6I Digital Camera</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter6"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 buy">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-5.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">14K White Gold 185.60 Grams 5.95 Carats.....</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter7"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 live">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-6.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">.6 Gram Pure Gold Nugget</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter8"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 time">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-7.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">Magnifying Glasses, Jewelry Loupe...</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter9"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-5 live">
                        <div class="auction-inner">
                            <div class="upcoming-badge" title="Upcoming Auction">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="auction-thumb">
                                <a href="product-details.html"><img src="{{asset('frontend')}}/assets/images/auction/upcoming/upcoming-8.png" alt="upcoming"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            </div>
                            <div class="auction-content">
                                <div class="title-area">
                                    <h6 class="title">
                                        <a href="product-details.html">"Small Primitive Shell" Glass Sculpture</a>
                                    </h6>
                                    <div class="list-area">
                                        <span class="list-item">
                                            <span class="list-id">Listing ID</span>14033488
                                        </span>
                                        <span class="list-item">
                                            <span class="list-id">Item #</span>0900-027867
                                        </span>
                                    </div>
                                </div>
                                <div class="bid-area">
                                    <div class="bid-inner">
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
                                </div>
                                <div class="bid-count-area">
                                    <span class="item">
                                        <span class="left">Total Bids</span>97 Bids
                                    </span>
                                    <span class="item">
                                        <span class="left">Last Bid </span>7 mins ago
                                    </span>
                                </div>
                            </div>
                            <div class="auction-bidding">
                                <span class="bid-title">Bidding ends in</span>
                                <div class="countdown">
                                    <div id="bid_counter10"></div>
                                </div>
                                <div class="bid-incr">
                                    <span class="title">Bid Increment</span>
                                    <h4>$3</h4>
                                </div>
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--============= Upcoming Auction Section Ends Here =============-->
