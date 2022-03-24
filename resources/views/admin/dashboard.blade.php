@extends('admin.layout.app')
@section('content')

@auth('admin')
    <h3>Your ar login  as Admin</h3>
@endauth

@guest('admin')
    Guest, Your are guest user
@endguest

@endsection
