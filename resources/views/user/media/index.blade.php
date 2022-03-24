@extends('user.layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum />
    <!--============= Hero Section Ends Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Left Sidebar --}}
                @include('user.inc.leftsidebar')
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="">Media</h4>

                                    <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample" style="width:auto; max-height:40px">
                                        <i class="fas fa-image"></i> Upload Media
                                    </button>
                                </div>

                                <div class="collapse my-4" id="collapseExample">
                                    <form action="{{ route('user.medial.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="card card-body">
                                            <div class="input-group mb-3">
                                                <input name="media" type="file" class="form-control form-control-sm "
                                                    id="inputGroupFile02">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary" style="max-height: 40px">Upload Media</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="row">
                                    @foreach ($medias as $media)
                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <img src="{{$media->getUrl()}}"
                                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                                        </div>
                                    @endforeach
                                </div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')

@endpush
@push('script')
@endpush
