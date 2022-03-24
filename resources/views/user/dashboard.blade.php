@extends('user.layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum />
    <!--============= Hero Section Ends Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                @include('user.inc.leftsidebar')
                <div class="col-lg-8">
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">My Activity</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/dashboard/01.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">{{ $proposals }}</span>
                                        </h2>
                                        <h6 class="info">Active Proposals</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/dashboard/02.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">0</span></h2>
                                        <h6 class="info">Items Won</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend') }}/assets/images/dashboard/03.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter">0</span></h2>
                                        <h6 class="info">Favorites</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <h5 class="title mb-10">Sumbited Proposals:</h5>
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#pending" class="active" data-toggle="tab">Pending</a>
                                </li>
                                <li>
                                    <a href="#history" data-toggle="tab">History</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="pending">
                                    <table class="purchasing-table">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Submit</th>
                                                <th>Expires</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bids as $bid)
                                                <tr>
                                                    <td data-purchase="item">{{$bid->product->title}}</td>
                                                    <td data-purchase="bid price">৳{{$bid->bid_price}}</td>
                                                    <td data-purchase="lowest bid">
                                                        {{$bid->created_at->format('d M Y')}}
                                                        <small class="text-info">{{$bid->created_at->format('h:i A')}}</small>
                                                    </td>
                                                    <td data-purchase="expires">{{$bid->product->end_date->format('d M Y')}}</td>
                                                    <td data-purchase="highest bid">
                                                        <span class="badge badge-pill badge-success">Active</span>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="history">
                                    <table class="purchasing-table">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Submit</th>
                                                <th>Expires</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bids as $bid)
                                                <tr>
                                                    <td data-purchase="item">{{$bid->product->title}}</td>
                                                    <td data-purchase="bid price">৳{{$bid->bid_price}}</td>
                                                    <td data-purchase="lowest bid">
                                                        {{$bid->created_at->format('d M Y')}}
                                                        <small class="text-info">{{$bid->created_at->format('h:i A')}}</small>
                                                    </td>
                                                    <td data-purchase="expires">{{$bid->product->end_date->format('d M Y')}}</td>
                                                    <td data-purchase="highest bid">
                                                        <span class="badge badge-pill badge-success">Active</span>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
