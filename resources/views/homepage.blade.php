@php
    // $setting = App\Models\Admin\Setting\SiteSetting::get()->first();
@endphp
@extends('layouts.app')
@section('content')
    @include('inc.banner')
    @include('inc.slider')
    @include('inc.featured')
    @include('inc.upcoming')
    @include('inc.howto')
    @include('inc.call')
    @include('inc.client')
@endsection

@push('style')
    <style>
        .auction-item-5 .auction-inner .auction-thumb img {
            width: 100%;
            max-height: 260px;
        }

    </style>
@endpush
