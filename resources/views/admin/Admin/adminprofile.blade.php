@extends('admin.layout.app')
@section('content')
  <!-- Start Content-->
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box page-title-box-alt">
                <h4 class="page-title">Profile</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Auction</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ asset('/storage/profileimage/' . $adminprofile->photo) }}" class="rounded-circle avatar-xl img-thumbnail"
                    alt="profile-image">

                    <h4 class="mt-3 mb-0">{{$adminprofile->name}}</h4>
                    <p class="text-muted">{{$adminprofile->degination}}</p>

                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                    <div class="text-start mt-3">
                        <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3">
                           {{$adminprofile->content}}
                        </p>

                        <div class="table-responsive">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                    <tr>
                                        <th scope="row">Full Name :</th>
                                        <td class="text-muted">{{$adminprofile->name}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile :</th>
                                        <td class="text-muted">{{$adminprofile->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email :</th>
                                        <td class="text-muted">{{$adminprofile->email}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Degination  :</th>
                                        <td class="text-muted">{{$adminprofile->designation}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-box -->



        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills navtab-bg">

                        <li class="nav-item">
                            <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="mdi mdi-cog me-1"></i>Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane" id="settings">
                            <form action="{{route('admin.adminprofile.update',$adminprofile->id)}}" method="POST">
                                @csrf

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="firstname" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="firstname" placeholder="Enter your name" value="{{$adminprofile->name}}">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="adminemail" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="adminemail" placeholder="Enter email" value="{{$adminprofile->email}}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="degination" class="form-label">Degination</label>
                                            <input type="degination" name="designation" class="form-control" id="degination" placeholder="Enter Designation" value="{{$adminprofile->designation}}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="adminbio" class="form-label">Bio</label>
                                            <textarea class="form-control" name="content" id="adminbio" rows="4" placeholder="Write something...">{{$adminprofile->content}}</textarea>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="adminphone" class="form-label">phone</label>
                                            <input type="text" name="phone" class="form-control" id="adminphone" placeholder="Enter phone " value="{{$adminprofile->phone}}">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                                   <!-- Start Content-->
                                <div class="row">

                                    {{-- <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="adminpassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="adminpassword" placeholder="Enter password" value="{{$adminprofile->password}}">

                                        </div>
                                    </div> <!-- end col --> --}}

                                </div> <!-- end row -->
                                <div class="row">

                                    <div class="col-md-12">
                                        <label class="col-md-4 col-form-label" for="example-fileinput">Default file input</label>
                                        <input type="file" name="photo" class="form-control" id="example-fileinput">
                                        <img class="img-thumbnail" style="width: 150px; height:100px; padding:5px" src="{{asset('/storage/profileimage/'.$adminprofile->photo)}}" alt="sdfsdf">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i>Upadte</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div>
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container-fluid -->

</div> <!-- content -->
@endsection
