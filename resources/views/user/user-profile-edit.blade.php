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
                            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="dash-pro-item mb-30 dashboard-widget">
                                    <div class="header">
                                        <h4 class="title">Edit Personal Details</h4>
                                        <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                                    </div>
                                    <ul class="dash-pro-body">
                                        <li>
                                            <div class="info-name">Full Name</div>
                                            <div class="info-value">
                                                <input type="text" name="name" placeholder="Full Name"
                                                    value="{{ $user->name }}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Email</div>
                                            <div class="info-value"><input type="email" name="email"
                                                    value="{{ $user->email }}" disabled style="background:gainsboro">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Gender</div>
                                            <div class="info-value">
                                                <select name="gender" id="">
                                                    <option value="male" @if ($user->gender == 'male') selected  @endif>Male</option>
                                                    <option value="female" @if ($user->gender == 'female') selected  @endif>Female</option>
                                                    <option value="other" @if ($user->gender == 'other') selected  @endif>Other</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Mobile</div>
                                            <div class="info-value">
                                                <input type="text" name="mobile" placeholder="01xxxxxxxxxxx"
                                                    value="{{ $user->mobile }}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">NID</div>
                                            <div class="info-value">
                                                <input type="text" name="nid" placeholder="123xxxxxxxx"
                                                    value="{{ $user->nid }}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Date of Birth</div>
                                            <div class="info-value">
                                                <input type="date" name="date_of_birth" placeholder="01xxxxxxxxxxx"
                                                    value="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Address</div>
                                            <div class="info-value">
                                                <input type="text" name="address" placeholder="1200, Dhaka"
                                                    value="{{ $user->address }}">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-name">Photo</div>
                                            <div class="info-value">
                                                <input type="file" name="avatar">
                                            </div>
                                        </li>
                                    </ul>
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
    <style>
        .info-value input,
        .info-value select {
            max-height: 35px;
        }

    </style>
@endpush
