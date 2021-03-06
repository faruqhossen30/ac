@extends('layouts.app')
@section('content')
    <div class="product-auction padding-bottom">
        <div class="container">
            @include('frontend.auction.inc.searchbar')
            {{-- End Search --}}
            <div class="row mb--50">
                @include('frontend.auction.inc.sidebar')
                <div class="col-lg-9 mb-50">
                    @php
                        $countdownserial = 1;
                    @endphp
                    @foreach ($products as $product)
                        @php
                            $media = $product->medias;
                            $image = json_decode($media);
                        @endphp
                        <div class="row justify-content-center mb-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card"
                                            style="box-shadow: 0px 9px 20px 0px rgb(22 26 57 / 36%)">
                                            <div class="card-body" style="padding: .25rem .5rem">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ $image[0]->url ?? '' }}" alt="trending"
                                                            class="img-thumbnail" style="max-height: 150px">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="d-flex justify-content-between">
                                                            <a href="{{ route('singleproduct', $product->slug) }}">
                                                                <h5 class="mt-1">{{ $product->title }}</h5>
                                                            </a>
                                                            <span class=""
                                                                style="font-size: 20px; color:#C92FA5"><i
                                                                    class="fa fa-heart"></i></span>
                                                        </div>

                                                        <div class="">
                                                            <ul class="list-inline d-flex justify-content-between align-items-center"
                                                                style="font-size: 13px;">
                                                                <span>
                                                                    <li class="list-inline-item">
                                                                        Category: <a
                                                                            href="{{ route('category', $product->category->slug) }}">{{ $product->category->name }}</a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        SubCategory: <a
                                                                            href="{{ route('subcategory', $product->subcategory->slug) }}">{{ $product->subcategory->name }}</a>
                                                                    </li>
                                                                    @isset($product->brand->name)
                                                                        <li class="list-inline-item">
                                                                            Brand: <a
                                                                                href="{{ route('brand', $product->brand->slug) }}">{{ $product->brand->name }}</a>
                                                                        </li>
                                                                    @endisset


                                                                </span>
                                                                <li class="list-inline-item" style="font-size: 16px; ">
                                                                    <div class="countdown">
                                                                        <div id="bid_counter{{ $countdownserial++ }}"
                                                                            data-enddate="{{ date_format($product->end_date, 'Y/m/d') }}">
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        {{-- <hr> --}}
                                                        {{-- <div class="my-2">
                                                        <p style="font-size: 14px"> <strong>Description: </strong>Bank protective work along the Right bank of Kushiyara river at Suprakandi in between from km 28.200 to km 28.500 = 300m in c/w Border river protective work and Development Project </p>
                                                    </div> --}}
                                                        <div class="list-inline">
                                                            <span><i class="fas fa-gavel"></i><strong>Total
                                                                Proposals:</strong>15 | </span>
                                                            <span><strong>Start From:</strong> ???
                                                                {{ $product->minimum_bid_price }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-between"
                                                style="padding: .25rem .75rem">
                                                <div>
                                                    <ul class="list-inline ">
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-secondary">
                                                                <span class=""><i
                                                                        class="fa fa-map-marker"></i></span>
                                                                {{ $product->district->name }}
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#" class="text-secondary"> <span
                                                                    class=""><i
                                                                        class="fa fa-compass"></i></span>
                                                                N/A </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <a href="{{ route('singleproduct', $product->slug) }}"
                                                        class="custom-button"
                                                        style="font-size: 12px; padding:0 25px;background:-webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%)">Veiw</a>
                                                    <a href="{{ route('singleproduct', $product->slug) }}"
                                                        class="custom-button"
                                                        style="font-size: 12px; padding:0 25px;background:-webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%)">Submit
                                                        Now !</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
