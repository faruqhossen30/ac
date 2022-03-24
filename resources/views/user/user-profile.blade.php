@extends('user.layouts.app')
@section('content')
    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum/>
    <!--============= Hero Section Ends Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            {{-- Left Sidebar --}}
            @include('user.inc.leftsidebar')
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Personal Details</h4>
                                <a href="{{route('user.profile.edit')}}" class="edit"><i class="flaticon-edit"></i> Edit</a>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Name</div>
                                    <div class="info-value">{{$user->name}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Date of Birth</div>
                                    <div class="info-value">{{optional($user->date_of_birth)->format('d M Y') ?? 'N/A'}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Address</div>
                                    <div class="info-value">{{$user->address ?? 'N/A'}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Account Settings</h4>
                                <a href="{{route('user.profile.edit')}}" class="edit"><i class="flaticon-edit"></i> Edit</a>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Language</div>
                                    <div class="info-value">English (United States)</div>
                                </li>
                                <li>
                                    <div class="info-name">Time Zone</div>
                                    <div class="info-value">(GMT-06:00) Central America</div>
                                </li>
                                <li>
                                    <div class="info-name">Status</div>
                                    @if ($user->status == 1)
                                        <div class="info-value"><i class="flaticon-check text-success"></i> Active</div>
                                    @endif
                                    @if ($user->status == 0)
                                        <div class="info-value"><i class="flaticon-check text-danger"></i> Deactive</div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Email Address</h4>
                                <a href="{{route('user.profile.edit')}}" class="edit"><i class="flaticon-edit"></i> Edit</a>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Email</div>
                                    <div class="info-value"><a href="http://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b9b4babdaaacebece198bfb5b9b1b4f6bbb7b5">{{$user->email}}</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Phone</h4>
                                <a href="{{route('user.profile.edit')}}" class="edit"><i class="flaticon-edit"></i> Edit</a>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Mobile</div>
                                    <div class="info-value">{{$user->mobile}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

