@extends('admin.layout.app')
@section('content')
    <!-- Start Content-->
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">Total submission List</h4>
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

                                <h4 class="page-title">Total submission List</h4>
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
                                        <th class="all">Product Name</th>
                                        <th>Username</th>
                                        <th>Total Bids</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $serial++ }}</th>
                                            <td>
                                                {{ $product->title }}
                                            </td>


                                            <td>
                                                <h5 class="m-0 d-inline-block align-middle"><a href="#"
                                                        class="text-dark">{{ $product->user->name }}</a></h5>
                                            </td>
                                            <td>
                                                {{ $totalBids }}
                                            </td>
                                            <td>
                                                {{-- {{$product->start_date}} --}}
                                                {{ Carbon\Carbon::parse($product->start_date)->format('d M Y') }}
                                            </td>
                                            <td>
                                                {{-- {{$product->end_date}} --}}
                                                {{ Carbon\Carbon::parse($product->end_date)->format('d M Y') }}
                                            </td>
                                            <td>
                                                <input onchange="return confirm('Are you sure ?');"
                                                    data-id="{{ $product->id }}" class="toggle-class" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive"
                                                    {{ $product->status ? 'checked' : '' }}>
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
