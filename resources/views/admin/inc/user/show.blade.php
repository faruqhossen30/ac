@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-6 col-xl-6 offset-3 mt-4">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('storage/images/' . $user->avatar) }}" class="rounded-circle img-thumbnail" width="200px"
                                                        height="200px" alt="{{ $user->avatar }}">


                <h4 class="mt-3 mb-0">{{$user->firstname}}</h4>
                <p class="text-muted">@webdesigner</p>

                <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Call</button>
                <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                <div class="text-start mt-3">
                    <h4 class="font-13 text-uppercase">About Me :</h4>
                    <p class="text-muted font-13 mb-3">

                    </p>

                    <div class="table-responsive">
                        <table class="table table-borderless table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">Full Name </th>
                                    <td class="text-muted"> : {{$user->firstname}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile </th>
                                    <td class="text-muted"> : {{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email </th>
                                    <td class="text-muted"> : {{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender </th>
                                    <td class="text-muted"> : {{$user->gender}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of birth </th>
                                    <td class="text-muted"> : {{$user->date_of_birth}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nid </th>
                                    <td class="text-muted"> : {{$user->nid}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <ul class="social-list list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                    </li>
                </ul>
            </div>
        </div> <!-- end card-box -->



    </div> <!-- end col-->


</div>

@endsection
