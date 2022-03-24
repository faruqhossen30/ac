@extends('layouts.app')
@section('content')
 {{-- <div class="error-section padding-top padding-bottom bg_img" data-background="{{asset('frontend')}}/assets/images/error-bg.png" style="background-image: url(&quot;assets/images/error-bg.png&quot;);">

    </div> --}}
    <div class="container">
        <div class="error-wrapper">
            <div class="error-thumb">
                <img src="{{asset('frontend')}}/assets/images/error.png" alt="error">
            </div>
            <h4 class="title">Return to the <a href="index.html">homepage</a></h4>
        </div>
@endsection


