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
                            <div class="row mb-30-none justify-content-center">
                                <div class="col-md-12 col-md-6">
                                    <div class="auction-item-2">
                                        <div class="header justify-content-center">
                                            <h5 class="title">Product details</h5>
                                            <a href="{{ route('product.index')}}" class="custom-button mt-2 mb-2 "><i class="fas fa-list"></i> List</a>
                                        </div>
                                        @foreach ($product->medias as $media)
                                            <div class="auction-thumb">
                                                <a href="#"><img src="{{ $media->url }}" width="300px" height="300px" alt="photo">
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                        @endforeach
                                        <div class="auction-content d-block">
                                            <table class="table table-bordered  mb-1 mt-1">
                                                <tbody>
                                                    <tr>
                                                        <th>Title</th>
                                                        <td>{{ $product->title }}</td>
                                                        <th>Minimum bid prize</th>
                                                        <td>{{ $product->minimum_bid_price }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Category</th>
                                                        <td>{{ $product->category->name }}</td>
                                                        <th>Sub Category</th>
                                                        <td>{{ $product->subcategory->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Brand</th>
                                                        <td>{{ $product->brand->name }}</td>
                                                        <th>User</th>
                                                        <td>{{ $product->user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Start Date</th>
                                                        <td>{{ $product->start_date }}</td>
                                                        <th>End Date</th>
                                                        <td>{{ $product->end_date }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>Minimum bid prize</th>
                                                        <td>{{ $product->minimum_bid_price }}</td>
                                                        <th>Minimum bid prize</th>
                                                        <td>{{ $product->minimum_bid_price }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>item_number</th>
                                                        <td>{{ $product->item_number }}</td>
                                                        <th>Division</th>
                                                        <td>{{ $product->division->name }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th>District</th>
                                                        <td>{{ $product->district->name }}</td>
                                                        <th>Upazilla</th>
                                                        <td>{{ $product->upazila->name }}</td>
                                                    </tr>
                                                    <tr>

                                                    </tr>
                                                    <tr style="max-width: 100%">
                                                        <th>Description</th>
                                                        <td colspan="3">{!! $product->description !!}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sort Description</th>
                                                        <td colspan="3">{!! $product->short_description !!}</td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                        <div class="mt-3">
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="custom-button flaticon-edit"> Edit</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                                style="display: inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick=" return confirm('Are you  shure to delete?')"
                                                    class="custom-button btn-xm  ml-2"
                                                    style="background:-webkit-linear-gradient(90deg, rgb(227, 18, 18)30%, #e31212 100%)">
                                                    <i class="fas fa-trash-alt"> Delete</i>
                                                </button>
                                            </form>
                                        </div>



                                      </div>
                                    </div>
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
    <style>
        .info-value input,
        .info-value select {
            max-height: 35px;
        }
        .wWOJcd {
            max-width: 543px;
        }
        .auction-item-2 .auction-content .custom-button {
            width: 100%;
            max-width: 160px;
            max-height: 37px;
            text-align: center;
        }
    </style>
@endpush
