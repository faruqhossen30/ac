@extends('admin.layout.app')
@section('content')
    @include('admin.inc.sub-category.create')
    @include('admin.inc.sub-category.edit')
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
                                data-bs-target="#exampleModal-lg">Add sub Category<i class="mdi mdi-arrow-rightms-1"></i>
                            </button>
                            <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatable-buttons"
                                                    class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Category Name</th>
                                                            <th>Sub Category Name</th>
                                                            <th style="display: 50%">Description</th>
                                                            <th>image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $serial = 1;
                                                        @endphp
                                                        @foreach ($subcategories as $sub_category)

                                                        @include('admin.inc.sub-category.show', compact('sub_category'))

                                                            <tr>
                                                                <th scope="row">{{ $serial++ }}</th>

                                                                <td>{{ $sub_category->category->name }}</td>
                                                                <td>{{ $sub_category->name }}</td>
                                                                <td style="">{{ $sub_category->description }}</td>
                                                                <td>
                                                                    <img src="{{ asset('storage/subcategory/' . $sub_category->photo) }}"
                                                                        width="50px" height="50px"
                                                                        alt="{{ $sub_category->photo }}">
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-start">
                                                                        <button href="#"
                                                                            class="btn btn-success waves-effect waves-light mr-2"
                                                                            id="showSubCategoryButton"
                                                                            data-id="{{ $sub_category->id }}"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#subcatagoryshowmodal">
                                                                            <span class="mdi mdi-eye"></span>

                                                                        </button>
                                                                        <button href="#"
                                                                            class="btn btn-info waves-effect waves-light editButton"
                                                                            id="editButton"
                                                                            data-id="{{ $sub_category->id }}"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#subcategoryeditmodal">
                                                                            <span class="mdi mdi-pencil"></span>

                                                                        </button>
                                                                        <form
                                                                            action="{{ route('sub-category.destroy', $sub_category->id) }}"
                                                                            method="POST" style="display: inline-flex">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                onclick=" return confirm('Are you  shure to delete?')"
                                                                                class="btn btn-danger waves-effect waves-light"><span
                                                                                    class="mdi mdi-trash-can-outline"></span></button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div> <!-- end card body-->
                                        </div> <!-- end card -->
                                    </div><!-- end col-->
                                </div>
                                <!-- end row-->

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
        $(document).ready(function() {
            var editButton = $('#editButton');
            var updateButton = $('#updateButton');

            var editModalBody = $('#editModalBody');
            let url = window.location.origin;

            $(document).on('click', '#editButton', function() {
                let id = $(this).data('id');

                // console.log($(this).data('id'));
                // subcatagoryshowmodal
                $.ajax({
                    type: "GET",
                    // dataType: "json",
                    url: `/subcategory/edit/${id}`,
                    success: function(subcategory) {
                        console.log(subcategory);
                        editModalBody.empty();
                        editModalBody.append(subcategory);

                    }
                }); // ajax end

            }); // click event
        })
    </script>

    {{-- /start  show sub category button --}}
    <script>
        $(document).ready(function() {
            var showSubCategoryButton = $('#showSubCategoryButton');
            var SubCatagoryViewModalBody = $('#SubCatagoryViewModalBody');
            let url = window.location.origin;
            // SubCatagoryViewModalBody
            $(document).on('click', '#showSubCategoryButton', function() {
                let id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: `/subcategory/edit/${id}`,
                    success: function(subcategory) {
                        console.log(subcategory);
                        SubCatagoryViewModalBody.empty();
                        SubCatagoryViewModalBody.append(
                            `
                    <div class="card">
                        <div class="card-body">
                        <h5>Name: ${subcategory.name} </h5>
                        <p>Description: ${subcategory.description}</p>
                        <img style="width:100px;" src=" ${url}/storage/images/${subcategory.photo}" alt="" >
                        </div>
                    </div>
                    `
                        )

                    }
                }); // ajax end
            });
        });
    </script>


 {{-- ====================================show Brand==================================== --}}
 <script>
    $(document).ready(function(){
        var showSubCategoryButton = $('#showSubCategoryButton');
        var SubCatagoryViewModalBody = $('#SubCatagoryViewModalBody');
        let url = window.location.origin;

      $(document).on('click','#showSubCategoryButton',function(){
          let id = $(this).data('id');

          $.ajax({
              type:"GET",
              dataType:"Json",
              url:`/subcategory/edit/${id}`,
              success:function(subcategory){
                  console.log(subcategory);
                  SubCatagoryViewModalBody.empty();
                  SubCatagoryViewModalBody.append(
                      `
                      <div class="card">
                        <div class="card-body">
                        <h5>Name: ${subcategory.name} </h5>
                        <p>Description: ${subcategory.description}</p>
                        <img style="width:100px;" src="${url}/storage/images/${subcategory.photo}" alt="" >
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
