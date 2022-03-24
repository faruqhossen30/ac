<div class="product-header mb-40 style-2" style="width: 100%">
    <form action="{{ route('search') }}" method="GET" class="product-search ml-auto"
        style="width: 100%; max-width:100%">
        <div class="row">
            <div class="col-md-3">
                <ul class="locationbreadcum">
                    <li id="onTest">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Select Location</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-9">
                <input name="keyword" type="text" placeholder="Search Auction">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>

    </form>
</div>

@push('style')
    <style>
        header {
            background-image: url({{ asset('frontend') }}/assets/images/banner/hero-bg.png);
        }

        .product-auction {
            margin-top: 150px;
        }

        .widget .title {
            border-bottom: 1px solid #eae7e7;
            text-align: center;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

    </style>
    <style>
        .locationbreadcum {
            list-style: none
        }

        .locationbreadcum li {
            display: inline;
        }

        .locationbreadcum li a {
            color: black;
            font-weight: bolder
        }

    </style>
@endpush
