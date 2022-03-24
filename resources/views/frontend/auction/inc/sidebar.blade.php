<div class="col-lg-3 mb-50">
    <form action="" method="get">
        {{-- Price --}}
        {{-- <div class="widget">
            <h5 class="title">Filter by Price</h5>
            <div class="widget-body">
                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 6%; width: 64%;">
                    </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                        style="left: 6%;"></span><span tabindex="0"
                        class="ui-slider-handle ui-corner-all ui-state-default" style="left: 70%;"></span>
                </div>
                <div class="price-range">
                    <label for="amount">Price :</label>
                    <input type="text" id="amount" readonly="">
                </div>
            </div>
            <div class="text-center mt-20">
                <a href="#0" class="custom-button">Filter</a>
            </div>
        </div> --}}
        {{-- Category --}}
        @php
            $filter_location = [];
            if (isset($_GET['location'])) {
                $filter_location = $_GET['location'];
            }
        @endphp
        {{-- @if (!empty($filter_location))
            @php
                $districts = App\Models\Admin\Location\District::whereIn('id', $filter_location)->get();
                // echo print_r($districts);
            @endphp
            <div class="widget">

                <div class="widget-header">
                    <h5 class="title">Location</h5>
                </div>
                <div class="widget-body">
                    @foreach ($districts as $location)
                        <div class="widget-form-group">
                            <input type="checkbox" name="location[]" value="{{ $location->id }}"
                                id="catid{{ $location->id }}" @if (!empty($filter_location) && in_array($location->id, $filter_location)) checked @endif
                                onchange="this.form.submit()">
                            <label for="catid{{ $location->id }}">{{ $location->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif --}}


        <div class="widget">
            @isset($_GET['keyword'])
                <input name="keyword" type="hidden" placeholder="Search Auction" value="{{ $_GET['keyword'] }}">
            @endisset
            <div class="widget-header">
                <h5 class="title">Category Type</h5>
            </div>
            <div class="widget-body">
                @php
                    $filter_category = [];
                    if (isset($_GET['category'])) {
                        $filter_category = $_GET['category'];
                    }
                @endphp
                @foreach ($categories as $category)
                    <div class="widget-form-group">
                        <input type="checkbox" name="category[]" value="{{ $category->id }}"
                            id="catid{{ $category->id }}" @if (!empty($filter_category) && in_array($category->id, $filter_category)) checked @endif
                            onchange="this.form.submit()">
                        <label for="catid{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <h5 class="title">Brands</h5>
            </div>
            <div class="widget-body">
                @php
                    $filter_brand = [];
                    if (isset($_GET['brand'])) {
                        $filter_brand = $_GET['brand'];
                    }
                @endphp
                @foreach ($brands as $brand)
                    <div class="widget-form-group">
                        <input type="checkbox" name="brand[]" value="{{ $brand->id }}"
                            id="brandid{{ $brand->id }}" @if (!empty($filter_brand) && in_array($brand->id, $filter_brand)) checked @endif
                            onchange="this.form.submit()">
                        <label for="brandid{{ $brand->id }}">{{ $brand->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="widget">
            <h5 class="title">Ending Within</h5>
            <div class="widget-body">
                <div class="widget-form-group">
                    <input type="checkbox" name="check-by-type" id="day">
                    <label for="day">1 Day</label>
                </div>
                <div class="widget-form-group">
                    <input type="checkbox" name="check-by-type" id="week">
                    <label for="week">1 Week</label>
                </div>
                <div class="widget-form-group">
                    <input type="checkbox" name="check-by-type" id="month1">
                    <label for="month1">1 Month</label>
                </div>
            </div>
        </div> --}}
    </form>
</div>
