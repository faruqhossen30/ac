@extends('layouts.app')
@section('content')
 <!--============= Hero Section Starts Here =============-->
 <x-userbredcum/>
 <!--============= Hero Section Ends Here =============-->
 <section class="about-section">
    <div class="container">
        <div class="about-wrapper mt--100 mt-lg--440 padding-top">
            <div class="row">
                <div class="col-lg-7 col-xl-6">
                    <div class="about-content" style="background: white; padding:10px">
                        <h4 class="subtitle">About Us</h4>
                        <p><strong>The Auction Leader</strong> is an online-based auction company. Where the seller will be able to present his product to all the people of the world for auction. We have our own verified app and website through which the seller can easily determine the price of his product and the buyer can say the price of his choice. Here both buyers and sellers will be able to buy and sell the product at the price of their choice. </p>
                        <p>The auction leader is moving forward with the firm conviction of giving quality status to the product. Many unknown important documents, products and vital information of which many do not know the exact explanation but when it is put up for auction with the help of wise people, we know its value and importance. Our goal is to create the opportunity to buy and sell products at the right price.</p>
                        <p>Today, The Auction Leader continues to be his only medium. We are hopeful that The Auction Leader will play an unimaginable role in the future as a land of information in the heart of the world and will contribute to the GDP growth of Bangladesh.</p>

                    </div>
                </div>
            </div>
            <div class="about-thumb">
                <img src="{{asset('frontend')}}/assets/images/about/about.png" alt="about">
            </div>
        </div>
    </div>
</section>
@endsection
