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
                        <h2 class="title">New Register</h2>
                        <p>You can log in to your Auction Leader account here.</p>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('register') }}">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="photo-tab" data-toggle="tab" href="#photo" role="tab"
                                    aria-controls="photo" aria-selected="true">Photo</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link disabled" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab"
                                    aria-controls="mobile" aria-selected="false">Moble</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link disabled" id="nid-tab" data-toggle="tab" href="#nid" role="tab"
                                    aria-controls="nid" aria-selected="false">NID</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            {{-- Photo area start --}}
                            <div class="tab-pane fade show active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                <div id="cameraArea" class="mt-3" style="display: flex; justify-content:center">
                                    <div id="cameraIcon"
                                        style="width: 150px; height:150px; background: gray; border-radius:50%; text-align:center; color:white;">
                                        <i class="fas fa-camera" style="margin-top: 60px; font-size: 60px;"></i>
                                    </div>
                                    <input type="hidden" name="image" value="" id="imagerawdata">
                                    <div id="cameraDisplay">

                                    </div>
                                    <div id="imageDisplay">

                                    </div>
                                </div>
                                <div style="display: flex; justify-content:center; color:black">
                                    <button id="openCameraButton" type="button" class="my-3 cameraButton">Open
                                        Camera</button>
                                    <button id="takePhotoButton" type="button" class="my-3 cameraButton"
                                        style="display: none">Take
                                        Photo</button>

                                    <button id="retakeButton" type="button" class="my-3 cameraButton" style="display: none">
                                        Retake</button>
                                    <button id="nextButton" type="button" class="my-3 cameraButton" style="display: none">
                                        Next</button>
                                </div>
                            </div>
                            {{-- Mobile area start --}}
                            <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                                <div class="row my-4">
                                    <div class="col-8 offset-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="mobileField" class="text-bold">Mobile: </label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" name="mobile" value="" id="mobileField" style="height: 36px">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <button id="mobileNextButton" type="button" class="my-3 cameraButton">
                                                Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- NID area start --}}
                            <div class="tab-pane fade" id="nid" role="tabpanel" aria-labelledby="nid-tab">
                                <div class="row my-4">
                                    <div class="col-8 offset-2">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="nidField" class="text-bold">NID Number: </label>
                                            </div>
                                            <div class="col-8">
                                                <input type="number" name="nid" value="" id="nidField" style="height: 36px">
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <button id="nidNextButton" type="button" class="my-3 cameraButton">
                                                Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="{{ route('login') }}" class="custom-button transparent">LOGIN </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->

    </div>
@endsection
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"
        integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            var openCameraButton = $('#openCameraButton');
            var takePhotoButton = $('#takePhotoButton');
            var cameraDisplay = $('#cameraDisplay');

            console.log(openCameraButton);


            $(document).on('click', '#openCameraButton', function() {
                $('#cameraIcon').css('display', 'none');
                $(this).css('display', 'none');
                $('#takePhotoButton').css('display', 'block');

                // Load webcam
                Webcam.set({
                    width: 200,
                    height: 200,
                    dest_width: 480,
                    dest_height: 480,
                    image_format: 'jpeg',
                    jpeg_quality: 90,
                    force_flash: false,
                    flip_horiz: true,
                    fps: 45
                });

                Webcam.attach('#cameraDisplay');

            }); // End Click Event

            $(document).on('click', '#takePhotoButton', function() {
                // alert('clicked')
                Webcam.snap(function(data_uri) {
                    $("#imagerawdata").val(data_uri);
                    document.getElementById('cameraDisplay').innerHTML =
                        `<img src="${data_uri}" style="width:300; height:200px" />`;
                });
                $(this).css('display', 'none');
                $('#nextButton').css('display', 'block');
                $('#retakeButton').css('display', 'block');
            }); // End Click Event

            $(document).on('click', '#retakeButton', function() {
                // alert('clicked')

                $('#nextButton').css('display', 'none');
                $('#retakeButton').css('display', 'none');
                $('#takePhotoButton').css('display', 'block');

                // Load webcam
                Webcam.set({
                    width: 200,
                    height: 200,
                    dest_width: 480,
                    dest_height: 480,
                    image_format: 'jpeg',
                    jpeg_quality: 90,
                    force_flash: false,
                    flip_horiz: true,
                    fps: 45
                });
                Webcam.attach('#cameraDisplay');

            }); // End Click Event

            $(document).on('click', '#nextButton', function() {
                $('#mobile-tab').removeClass('disabled')
                $('#mobile-tab').click();
                // $('input[name="mobile"]').val();

            })

            $(document).on('click', '#mobileNextButton', function() {
                $('#nid-tab').removeClass('disabled')
                $('#nid-tab').click();
            })


        });
    </script>
@endpush
@push('style')
    <style>
        .nav {
            justify-content: center
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            color: red;
            border: none;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            color: #4A2DB2;
            border: none;
            font-weight: bold;
            border-bottom: 4px solid #4A2DB2;
        }

        .cameraDisplay img {
            width: 200px;
            height: 200px;
        }

        .cameraButton {
            width: auto;
            color: gray: height:40px;
            font-size: 16px;
            box-shadow: -1.04px 4.891px 20px 0px rgb(69 49 183 / 50%);
            border-radius: 30px;
            padding: 0 15px;
            height:40px;
        }

    </style>
@endpush
