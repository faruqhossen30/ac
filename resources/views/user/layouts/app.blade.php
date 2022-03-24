@php
    $categories = App\Models\Admin\Product\Category::with('subcategories')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Auction Leader</title>

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">



    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.png" type="image/x-icon">
    @stack('style')
</head>

<body>
    @include('layouts.header')

    <!--============= Cart Section Starts Here =============-->
    @include('layouts.sidebarcart')
    <!--============= Cart Section Ends Here =============-->

    @yield('content')



    <!--============= Footer Section Starts Here =============-->
    @include('layouts.footer')
    <!--============= Footer Section Ends Here =============-->


    @stack('script')
</body>

<!-- Mirrored from pixner.net/sbidu/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 03:50:35 GMT -->

</html>
