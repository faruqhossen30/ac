<!--============= Feture Auction Section Starts Here =============-->
<section class="feature-auction-section padding-bottom padding-top bg_img"
    data-background="{{ asset('frontend') }}/assets/images/auction/featured/featured-bg-1.jpg">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Featured Items</h2>
            <p>Submit your proposal price and win great deals,Our auction process is simple, efficient, and transparent.</p>
        </div>
        <div class="row justify-content-center mb-30-none">
            @foreach ($feturedproducts as $product)
                @php
                    $media = $product->medias;
                    $image = json_decode($media);
                @endphp
                <div class="col-sm-10 col-md-6 col-lg-3">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="{{route('singleproduct', $product->slug)}}"><img
                                    src="{{$image[0]->url}}"
                                    alt="jewelry"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="{{route('singleproduct', $product->slug)}}">{{ $product->title }}</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Proposals</div>
                                        <div class="amount">{{$product->total_submit}}</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Start at</div>
                                        <div class="amount">৳{{$product->minimum_bid_price}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="countdown-area">
                                <div class="countdown">
                                    <div id="bid_counter23"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{route('singleproduct', $product->slug)}}" class="custom-button">Submit Now !</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
        <div class="load-wrapper">
            <a href="{{ route('auction') }}" class="normal-button">See All Auction</a>
        </div>
    </div>
</section>
<!--============= Feture Auction Section Ends Here =============-->
