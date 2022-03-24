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
                                    <h5 class="title">Product List</h5>
                                    <a href="{{ route('product.create') }}" class="edit"><i
                                            class="flaticon-edit"></i>Create</a>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Start Time</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                                                <td>{{ $product->title }}</td>
                                                <td>৳{{ $product->minimum_bid_price }}</td>
                                                <td>{{ $product->end_date->format('d M Y') }}</td>
                                                <td><span class="badge badge-pill badge-success">Active</span></td>
                                                <td style="display: flex">
                                                    <a href="{{ route('product.edit', $product->id) }}">
                                                        <span class="badge badge-primary p-2">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </span>
                                                    </a>
                                                    <a href="{{ route('product.show', $product->id) }}">
                                                        <span class="badge badge-warning ml-1 p-2">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </span>
                                                    </a>
                                                    <form action="{{ route('product.destroy', $product->id) }}"
                                                        method="POST" style="display: inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick=" return confirm('Are you  shure to delete?')">
                                                            <span class="badge badge-danger ml-1 p-2">
                                                                <i class="far fa-trash-alt"></i>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $products->links('pagination::custom-pagination') }}
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

        button {
            margin: 0 1px;
            padding: 0 ;
            border: none;
            height: 0;
        }

    </style>
@endpush
