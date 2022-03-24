@extends('user.layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum />
    <x-mediamodal />
    {{-- <x-locationmodal /> --}}
    <!--============= Hero Section Ends Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Left Sidebar --}}
                @include('user.inc.leftsidebar')
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                                class="dropzone" id="my-awesome-dropzone">
                                @csrf
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">Create Product</h4>
                                        <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                    </div>
                                    <div class="dash-pro-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Product Name:</label>
                                                <span class="text-danger">*</span>
                                                <input name="title" type="text" id="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    placeholder="Product name" value="{{old('title')}}">
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="brand">Brand Name:</label>
                                                <select name="brand_id" class="form-control-sm" id="brand">
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}" @if (old('brand_id') && old('brand_id') ==  $brand->id) selected @endif>{{ $brand->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="category">Category:</label><span class="text-danger">*</span>
                                                <select name="category"
                                                    class="form-control-sm @error('category') is-invalid @enderror"
                                                    id="category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if (old('category') && old('category') ==  $category->id) selected @endif>{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="subcategory">Subcategory:</label><span
                                                    class="text-danger">*</span>
                                                <select name="subcategory"
                                                    class="form-control-sm @error('subcategory') is-invalid @enderror"
                                                    id="subcategory">
                                                    {{-- @foreach ($subcategories as $subcategory)
                                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                    @endforeach --}}
                                                </select>
                                                @error('subcategory')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="summernote">Description:</label><span class="text-danger">*</span>
                                                <textarea name="description" id="summernote" placeholder="Description" rows="5" cols="50"
                                                    class="@error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="short_description">Short Description:</label>
                                                <textarea name="short_description" id="short_description" placeholder="Description">{{old('short_description')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="division_id">Division:</label><span class="text-danger">*</span>
                                                <select name="division_id" class="form-control-sm @error('division_id') is-invalid @enderror" id="division_id">
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}" @if (old('division_id') && old('division_id') ==  $division->id) selected @endif>{{ $division->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('division_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="district_id">District:</label><span class="text-danger">*</span>
                                                <select name="district_id" class="form-control-sm @error('district_id') is-invalid @enderror" id="district_id">
                                                </select>
                                                @error('district_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="upazila_id">Upazila:</label><span class="text-danger">*</span>
                                                <select name="upazila_id" class="form-control-sm @error('upazila_id') is-invalid @enderror" id="upazila_id">
                                                </select>
                                                @error('upazila_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="start_date">startdate:</label><span class="text-danger">*</span>
                                                <input type="date" name="start_date" id="startdate"
                                                    class="@error('start_date') is-invalid @enderror">
                                                @error('start_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="end_date">End Date:</label><span class="text-danger">*</span>
                                                <input type="date" name="end_date" id="startdate"
                                                    class="@error('end_date') is-invalid @enderror">
                                                @error('end_date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="minimum_bid_price">Minimu Price:</label><span class="text-danger">*</span>
                                                <input name="minimum_bid_price" type="number" id="minimum_bid_price"
                                                    class="form-control @error('minimum_bid_price') is-invalid @enderror"
                                                    placeholder="1,000" value="{{old('minimum_bid_price')}}">
                                                @error('minimum_bid_price')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col">
                                                <h6>Product Slider Photos <span class="text-danger">*</span></h6>
                                                <div id="productSliderImage" style="width: 100%; border:1px dashed gray"
                                                    class="text-center my-3">

                                                    <span>Prduct Gallery Photos</span>
                                                    <br>
                                                    <span>
                                                        <i class="fa fa-picture-o" aria-hidden="true"
                                                            style="font-size: 30px"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" id="productImageArea">

                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit" style="width: auto">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        input,
        select {
            max-height: 35px;
        }

        input::placeholder {
            font-size: 16px;
        }

        label {
            margin-top: 0.5rem;
        }
        .nicEdit-main{
            padding: 10px;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
@endpush
@push('script')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>

    @include('user.product.inc.mediascript')
    @include('user.product.inc.locationscript')
    <script>
        $(document).ready(function() {
            var category = $('select[name="category"]');
            var subcategory = $('select[name="subcategory"]');

            $(document).on('change', 'select[name="category"]', function() {
                let id = $(this).val();
                if (id) {
                    $.ajax({
                        'url': `/ajax/getsubcategory/${id}`,
                        'type': 'GET',
                        'success': function(data) {
                            subcategory.empty();
                            data.map(function(subcate) {
                                subcategory.append(
                                    `<option value="${subcate.id}">${subcate.name}</option>`
                                )
                            });
                        },
                        'error': function(error) {
                            console.log(error)
                        }
                    }) // End Ajax
                }; // End If


            });
        });
    </script>
    {{-- <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    </script> --}}
@endpush
