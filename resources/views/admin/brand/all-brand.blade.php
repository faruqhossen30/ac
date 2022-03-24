@extends('admin.layout.app')
@section('content')
    {{-- ==============create modal====================== --}}
    @include('admin.inc.brand.create')
    @include('admin.inc.brand.edit')
    @include('admin.inc.brand.show')

    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">Datatables</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Datatables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-lg">Add Brand<i class="mdi mdi-arrow-rightms-1"></i>
                            </button>
                            <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="basic-datatable"
                                            class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                            role="grid" aria-describedby="basic-datatable_info" style="width: 1180px;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Sl</th>
                                                    <th>Brand Name</th>
                                                    <th>Description</th>
                                                    <th>image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $serial = 1;
                                                @endphp
                                                @foreach ($brands as $brand)
                                                @include('admin.inc.brand.edit', compact('brand'))
                                                @include('admin.inc.brand.show', compact('brand'))
                                                    <tr>
                                                        <th scope="row">{{ $serial++ }}</th>
                                                        <td>{{ $brand->name }}</td>
                                                        <td>{{ $brand->description }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/images/' . $brand->photo) }}"
                                                                width="50px" height="50px" alt="{{ $brand->photo }}">
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-start">
                                                                <button href="#" class="btn btn-success waves-effect waves-light p-2 mr-1 "
                                                                    id="showBrandButton" data-id="{{ $brand->id }}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#brandshowmodal">
                                                                    <span class="mdi mdi-eye"></span>
                                                                    {{-- brandViewModalBody --}}
                                                                </button>
                                                                <button href="#" class="btn btn-info waves-effect waves-light p-2 ml-1 editButton"
                                                                    id="editButton" data-id="{{ $brand->id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#brandModal">
                                                                    <span class="mdi mdi-pencil"></span>

                                                                </button>

                                                                <form action="{{ route('brand.destroy', $brand->id) }}"
                                                                    method="POST" style="display: inline-flex">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        onclick=" return confirm('Are you  shure to delete?')"

                                                                        class="btn btn-danger waves-effect waves-light p-2">
                                                                        <span class="mdi mdi-trash-can-outline"></span>
                                                                    </button>
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
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->

    </div>
@endsection
@push('style')
    <!-- third party css -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endpush

@push('script')
    <!-- third party js -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- third party js ends -->
    <!-- Datatables init -->
    <script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script>
    <script>


        $(document).ready(function(){
            var editButton = $('#editButton');
            var updateButton = $('#updateButton');

            var editModalBody = $('#editModalBody');

            let url = window.location.origin;

            $(document).on('click','#editButton',function(){
                let id = $(this).data('id');
                console.log(id)
                $.ajax({
                    type:"GET",
                    dataType:"json",
                    url:`/brand/edit/${id}`,
                    success:function(brand){
                        console.log(brand);
                        editModalBody.empty();
                        editModalBody.append(
                            `
                             <form action="/admin/brand/${brand.id}" method="POST" enctype="multipart/form-data" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="recipient-name" class="col-form-label">Brand
                                Name</label>
                            <input name="name" type="text" class="form-control" id="name" spellcheck="false"
                                data-ms-editor="true" value="${brand.name}">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" spellcheck="false"
                                data-ms-editor="true" rows="4">${brand.description}</textarea>
                        </div>
                        <div class="form-group">
                            <label> Image <span class="text-danger">*</span></label>
                            <input type="file" name="photo" id="photo"
                                class="form-control  @error('image') is-invalid @enderror">
                        </div>
                        <div id="edtimodalimage">
                            <img style="width:100px;" src=" ${url}/storage/images/${brand.photo}" alt="" >
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id="updateButton" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    `
                        );
                    }
                });
            });
        })
    </script>

    {{-- ====================================show Brand==================================== --}}
    <script>
        $(document).ready(function(){
            var showBrandButton = $('#showBrandButton');
            var brandViewModalBody = $('#brandViewModalBody');
            let url = window.location.origin;

          $(document).on('click','#showBrandButton',function(){
              let id = $(this).data('id');
              brandViewModalBody
              $.ajax({
                  type:"GET",
                  dataType:"Json",
                  url:`/brand/edit/${id}`,
                  success:function(brand){
                      console.log(brand);
                      brandViewModalBody.empty();
                      brandViewModalBody.append(
                          `
                          <div class="card">
                            <div class="card-body">
                            <h5>Name: ${brand.name} </h5>
                            <p>Description: ${brand.description}</p>
                            <img style="width:100px;" src=" ${url}/storage/images/${brand.photo}" alt="" >
                            </div>
                        </div>
                          `
                      )
                  }
              });
          });
        });
    </script>
@endpush
