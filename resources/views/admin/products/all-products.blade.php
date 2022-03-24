@extends('admin.layout.app')
@section('content')
    <!-- Start Content-->
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">Product List</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <a href="{{ route('product.create') }}" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-1"></i> Add Products</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <button type="button" class="btn btn-success mb-2 mb-sm-0"><i
                                            class="mdi mdi-cog"></i></button>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->
                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="table-light">
                                    <tr>
                                        <th class="all" style="width: 20px;">
                                            <div class="form-check mb-0 font-16">
                                                <input class="form-check-input" type="checkbox" id="productlistCheck">
                                                <label class="form-check-label" for="productlistCheck">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th class="all">S.N</th>
                                        <th class="all">Product</th>
                                        <th>Username</th>
                                        <th>Category</th>
                                        <th>Added Date</th>
                                        <th>Price</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($products as $product)
                                        <tr>

                                            <td>
                                                <div class="form-check mb-0 font-16">
                                                    <input class="form-check-input" type="checkbox" id="productlistCheck1">
                                                    <label class="form-check-label" for="productlistCheck1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <th scope="row">{{ $serial++ }}</th>
                                            <td>
                                                <img src="../assets/images/products/product-1.png" alt="contact-img"
                                                    title="contact-img" class="rounded me-3" height="48" />

                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $product->title }}</a></h5>
                                            </td>

                                            <td>
                                                {{ $product->user->name }}
                                            </td>
                                            <td>
                                                {{ $product->category->name }}
                                            </td>
                                            <td>

                                                {{ Carbon\Carbon::parse($product->start_date)->format('d M Y') }}
                                            </td>
                                            <td>
                                                {{ $product->minimum_bid_price }}
                                            </td>
                                            <td>

                                                {{ Carbon\Carbon::parse($product->end_date)->format('d M Y') }}
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <a href="#" class="btn btn-success btn-xm  ri-eye-line "></a>
                                                    </a>
                                                    <button href="#" class="btn btn-sm btn-info editButton ml-1"
                                                        id="editButton" data-id="" data-bs-toggle="modal"
                                                        data-bs-target="#categoryeditmodal">
                                                        <span class="mdi mdi-pencil"></span>
                                                    </button>

                                                    <form action="#" method="POST" style="display: inline-flex">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick=" return confirm('Are you  shure to delete?')"
                                                            class=" btn btn-danger far fa-trash-alt "> </button>
                                                    </form>
                                                </div>
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
        <!-- end row -->
    @endsection


    @push('style')
        <style>
            button#editButton {
                margin-left: 5px;
                margin-right: 5px;
            }

        </style>
    @endpush
