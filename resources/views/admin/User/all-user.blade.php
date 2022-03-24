@extends('admin.layout.app')
@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">User Data Table</h4>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>mobile</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $serial = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $serial++ }}</th>
                                    <td>{{ $user->name }} </td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $user->avatar) }}" width="50px"
                                            height="50px" alt="{{ $user->avatar }}">
                                    </td>
                                    <td>
                                        <input onchange="return confirm('Are you sure ?');" data-id="{{ $user->id }}"
                                            class="toggle-class" type="checkbox" data-onstyle="success"
                                            data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive"
                                            {{ $user->status ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start">
                                            <a href="{{ route('admin.user.show', $user->id) }}"
                                                class="btn btn-success btn-xm  ri-eye-line "></a>
                                            </a>
                                            <button href="#" class="btn btn-sm btn-info editButton ml-1" id="editButton"
                                                data-id="{{ $user->id }}" data-bs-toggle="modal"
                                                data-bs-target="#categoryeditmodal">
                                                <span class="mdi mdi-pencil"></span>
                                            </button>

                                            <form action="#" method="POST" style="display: inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick=" return confirm('Are you  shure to delete?')"
                                                    class=" btn btn-danger far fa-trash-alt "> </button>
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
@endsection
@push('script')
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');
                console.log(status);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/userChangeStatus',
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush
@push('style')
    <style>
        button#editButton {
            margin-right: 3px;
        }

        a.btn.btn-success.btn-xm.ri-eye-line {
            margin-right: 4px;
        }

    </style>
@endpush
