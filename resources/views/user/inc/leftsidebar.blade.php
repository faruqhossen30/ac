<div class="col-sm-10 col-md-7 col-lg-4">
    <div class="dashboard-widget mb-30 mb-lg-0">
        <div class="user">
            <div class="thumb-area">
                <div class="thumb">
                    @if (auth()->user()->avatar)
                        <img src="{{ asset('storage/avatar/' . auth()->user()->avatar) }}" alt="user">
                    @else
                        <img src="{{ asset('frontend') }}/assets/images/dashboard/user.png" alt="user">
                    @endif
                </div>
                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                <input type="file" id="profile-pic" class="d-none">
            </div>
            <div class="content">
                <h5 class="title"><a href="#0">{{ auth()->user()->name }}</a></h5>
                <span class="username"><a href="http://pixner.net/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="f59f9a9d9bb59298949c99db969a98">Email: {{auth()->user()->email}} </a></span>
            </div>
        </div>
        <ul class="dashboard-menu">
            <li>
                <a href="{{ route('user.dashboard') }}" class="@if (request()->routeIs('user.dashboard')) active @endif"><i class="flaticon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('product.index') }}" class="{{(request()->is('user/product*')) ? 'active' : ''}}"><i class="flaticon-dashboard"></i>Product</a>
            </li>
            <li>
                <a href="{{route('user.medial.all')}}" class="@if (request()->routeIs('user.medial.all')) active @endif"><i class="flaticon-dashboard"></i>Media</a>
            </li>
            <li>
                <a href="{{ route('user.profile') }}" class="@if (request()->routeIs('user.profile')) active @endif"><i class="flaticon-settings"></i>Personal Profile </a>
            </li>
            <li>
                <a href="{{ route('user.bids') }}" class="@if (request()->routeIs('user.bids')) active @endif"><i class="flaticon-auction"></i>My Submits</a>
            </li>
            <li>
                <a href="{{ route('user.winning.bids') }}" class="@if (request()->routeIs('user.winning.bids')) active @endif""><i class="flaticon-best-seller"></i>Winning </a>
            </li>
            <li>
                <a href="{{ route('user.alert') }}" class="@if (request()->routeIs('user.alert')) active @endif"><i class="flaticon-alarm"></i>My Alerts</a>
            </li>
            <li>
                <a href="{{ route('user.favorite') }}" class="@if (request()->routeIs('user.favorite')) active @endif"><i class="flaticon-star"></i>My Favorites</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="flaticon-star"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
