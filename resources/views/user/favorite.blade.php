@extends('user.layouts.app')
@section('content')

  <!--============= Hero Section Starts Here =============-->
  <x-userbredcum/>
  <!--============= Hero Section Ends Here =============-->


<!--============= Favorites Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            {{-- Left Sidebar --}}
            @include('user.inc.leftsidebar')
            <div class="col-lg-8">
                <div class="dash-bid-item dashboard-widget mb-40-60">
                    <div class="header">
                        <h4 class="title">My Favorites</h4>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!--============= Favorites Section Ends Here =============-->

@endsection
