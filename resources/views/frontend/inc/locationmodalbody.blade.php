<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach ($divisions as $division)
                <a class="nav-link border-bottom d-flex justify-content-between text-body"
                    id="v-pills-{{ $division->name }}-tab" data-toggle="pill" href="#v-pills-{{ $division->name }}"
                    role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <span class="font-weight-normal">
                        {{-- <i class="fas fa-map-marker-alt"></i>  --}}
                        <i class="fa fa-compass"></i>
                        {{ $division->name }}</span>
                    {{-- <span> <i class="far fa-arrow-alt-circle-right"></i> </span> --}}
                    <span> <i class="fas fa-arrow-right"></i> </span>
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            @foreach ($divisions as $division)
                <div class="tab-pane fade show " id="v-pills-{{ $division->name }}" role="tabpanel"
                    aria-labelledby="v-pills-{{ $division->name }}-tab">
                    {{-- <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="padding: .25rem .5rem">
                            <a href="#" class="text-body">All Divisiion</a>
                        </li>
                    </ul> --}}
                    <form action="" method="get">
                        @foreach ($division->districts as $district)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action" style="padding: .25rem .5rem">
                                    <a href="{{ route('location', $district->slug) }}"
                                        class="text-body font-weight-bold"
                                        style="padding: .25rem .5rem">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $district->name }}
                                    </a>
                                    {{-- </li> --}}
                            </ul>
                        @endforeach
                    </form>
                </div>
            @endforeach



            {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                Home</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                Profile</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                Message</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                Settings</div> --}}
        </div>
    </div>
</div>
