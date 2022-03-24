@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <p class="header-title fs-4 text-uppercase">All Admins List</p>
                            </div>

                            <div class="col-md-2">
                                <a href="{{ route('admin.adminlist') }}" class="btn btn-success float-end"
                                    title="Create new">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="basic-datatable_length"><label>Show <select
                                                name="basic-datatable_length" aria-controls="basic-datatable"
                                                class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="basic-datatable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="basic-datatable" spellcheck="false"
                                                data-ms-editor="true"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="basic-datatable"
                                        class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid"
                                        aria-describedby="basic-datatable_info" style="width: 1041px;">
                                        <thead>
                                            <tr role="row">
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $serial = 1;
                                            @endphp
                                            @foreach ($adminlist as $admin)
                                                <tr>
                                                    <th scope="row">{{ $serial++ }}</th>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->email }}</td>

                                                    <td>
                                                        <div class="d-flex justify-content-start">
                                                            <a href="{{ route('admin.adminlist', $admin->id) }}"
                                                                class="btn btn-success btn-xm  ri-eye-line"></a>

                                                            </button>
                                                            <button href="#" class="btn btn-sm btn-info mr-2 editButton"
                                                                id="editButton" data-id="{{ $admin->id }}"
                                                                data-bs-toggle="modal" data-bs-target="#categoryeditmodal">
                                                                <span class="mdi mdi-pencil"></span>

                                                            </button>

                                                            <form action="{{ route('category.destroy', $admin->id) }}"
                                                                method="POST" style="display: inline-flex">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    onclick=" return confirm('Are you  shure to delete?')"
                                                                    class=" btn btn-danger far fa-trash-alt ml-1 "></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="basic-datatable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 13 entries</div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div>
@endsection
@push('style')
    <style>
        button#editButton {
            margin-left: 3px;
            margin-right: 3px;
        }

    </style>
@endpush
