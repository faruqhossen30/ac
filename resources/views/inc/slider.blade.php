<!--============= Hightlight Slider Section Starts Here =============-->
<div class="browse-slider-section mt--140">
    <div class="container">
        <div class="section-header-2 mb-4">
            <div class="left">
                <h6 class="title cl-white cl-lg-black pl-0">Browse the highlights</h6>
            </div>
            <div class="slider-nav">
                <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
        <div class="m--15">
            <div class="browse-slider owl-theme owl-carousel">
                @foreach ($categories as $category)
                    <a href="{{route('category', $category->slug)}}" class="browse-item">
                        <img src="{{ asset('storage/images/' . $category->photo) }}" alt="auction">
                        <span class="info">{{$category->name}}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--============= Hightlight Slider Section Ends Here =============-->
