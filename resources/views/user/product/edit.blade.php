@extends('user.layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum />
    <x-mediamodal />
    <!--============= Hero Section Ends Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">
                {{-- Left Sidebar --}}
                @include('user.inc.leftsidebar')
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                                class="dropzone" id="my-awesome-dropzone">
                                @csrf
                                @method('PUT')
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">Edit Product</h4>
                                        <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                    </div>
                                    <div class="dash-pro-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Product Name:</label>
                                                <input name="title" value="{{$product->title}}" type="text" id="title" class="form-control"
                                                    placeholder="Product name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="brand">Brand Name:</label>
                                                <select name="brand_id" class="form-control-sm" id="brand">
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}" @if ($product->brand_id ==  $brand->id) selected @endif>{{ $brand->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="category">Category:</label>
                                                <select name="category" class="form-control-sm" id="category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="subcategory">Subcategory:</label>
                                                <select name="subcategory" class="form-control-sm" id="subcategory">
                                                    @foreach ($subcategories as $subcategory)
                                                        <option value="{{$subcategory->id}}" @if($subcategory->id == $product->subcategory_id) seleted @endif>{{$subcategory->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="summernote">Description:</label>
                                                <textarea name="description" id="summernote" placeholder="Description" rows="5"
                                                    cols="50">{{$product->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="short_description">Short Description:</label>
                                                <textarea name="short_description" id="short_description" placeholder="Description">
                                                    {{$product->short_description}}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="division_id">Division:</label>
                                                <select name="division_id" class="form-control-sm" id="division_id">
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}" @if ($product->division_id ==  $division->id) selected @endif>{{ $division->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="district_id">District:</label>
                                                <select name="district_id" class="form-control-sm" id="district_id">
                                                    @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}" @if ($product->district_id ==  $district->id) selected @endif>{{ $district->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="upazila_id">Upazila:</label>
                                                <select name="upazila_id" class="form-control-sm" id="upazila_id">
                                                    @foreach ($upazilas as $upazila)
                                                    <option value="{{ $upazila->id }}" @if ($product->upazila_id ==  $upazila->id) selected @endif>{{ $upazila->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="start_date">startdate:</label>
                                                <input type="date" name="start_date" value="{{$product->start_date->format('Y-m-d')}}" id="startdate">
                                            </div>
                                            <div class="col">
                                                <label for="end_date">End Date:</label>
                                                <input type="date" name="end_date" value="{{$product->end_date->format('Y-m-d')}}" id="startdate">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="minimum_bid_price">Minimu Price:</label>
                                                <input name="minimum_bid_price" value="{{$product->minimum_bid_price}}" type="number" id="minimum_bid_price" class="form-control"
                                                    placeholder="1,000">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col">
                                                <h6>Product Slider Photos</h6>
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
                                            @foreach ($medias as $media)
                                            {{-- {{$media}} --}}
                                            <div class="selectedProductImageMedia p-1" style="text-align:center">
                                                <img src="{{$media->url}}" alt="" class="img-responsive p-2 img-thumbnail" style="width:150px;height:150px" > <br>
                                                <button  type="button" class="selectedProductImageMediaCloseButton btn btn-danger btn-sm mt-1"> Close</button>
                                                <input type="hidden" name="photos[]" value="{{$media->url}}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit" style="width: auto">Update</button>
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

        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
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
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script>
        $(function() {

            $('#my-awesome-dropzone').validate({
                rules: {
                    title: {
                        required: true
                    },
                    category: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    division_id: {
                        required: true
                    },
                    district_id: {
                        required: true
                    },
                    upazila_id: {
                        required: true
                    },
                    start_date: {
                        required: true
                    },
                    end_date: {
                        required: true
                    },
                    minimum_bid_price: {
                        required: true
                    },
                },
                messages: {
                    title: {
                        required: "Please enter product name."
                    },
                    category: {
                        required: "Please select product category."
                    },
                    description: {
                        required: "Please write some details about your product."
                    },
                    division_id: {
                        required: "Please select division"
                    },
                    district_id: {
                        required: "Please select district."
                    },
                    upazila_id: {
                        required: "Please select upazila."
                    },
                    start_date: {
                        required: "Please select auction start day."
                    },
                    end_date: {
                        required: "Please select auction end day."
                    },
                    minimum_bid_price: {
                        required: "Please enter auction start price."
                    },
                },
                // errorElement: 'div',
                errorClass: 'text-danger small'

            });
        });
    </script>
@endpush
