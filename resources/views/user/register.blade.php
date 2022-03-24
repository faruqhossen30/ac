@extends('layouts.app')
@section('content')

    <!--============= Hero Section Starts Here =============-->
    <x-userbredcum />
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header">
                        <h2 class="title">HI, THERE</h2>
                        <p>You can log in to your Auction Leader account here.</p>
                    </div>
                    {{-- <ul class="login-with">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i>Register with Facebook</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus"></i>Register with Google</a>
                        </li>
                    </ul>
                    <div class="or">
                        <span>Or</span>
                    </div> --}}
                    <form class="login-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-30">
                                    <label for="login-firstname"><i class="far fa-user"></i></label>
                                    <input name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" id="login-name"
                                        placeholder=" First name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="login-email" placeholder="Email Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-30">
                            <label for="login-phone"><i class="fas fa-phone"></i></label>
                            <input name="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror"
                                id="login-phone" placeholder="Phone number">
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input name="password" type="password"class="form-control @error('password') is-invalid @enderror" id="login-pass" autocomplete="new-password"  >
                                <span class="pass-type"><i class="fas fa-eye"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm"><i class="fas fa-lock"></i></label>
                            <input name="password_confirmation" type="password"class="form-control" id="password-confirm" autocomplete="new-password"  >
                            <span class="pass-type"><i class="fas fa-eye"></i></span>

                        </div>
                        <div class="form-group">
                            <a href="#0">Forgot Password?</a>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="{{route('login')}}" class="custom-button transparent">LOGIN </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->

    </div>
@endsection
