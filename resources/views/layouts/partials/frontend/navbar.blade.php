<nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
    <div class="container">
        <a class="navbar-brand text-primary fw-bolder fs-4" href="{{ route('home') }}">Cheap Air</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-semibold text-uppercase">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('flight') }}">
                        flights 
                    </a>
                    {{-- role="button" data-bs-toggle="dropdown" aria-expanded="false" --}}
                    {{-- <i class="ri-arrow-down-s-line"></i> --}}
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">all</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Business</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> --}}
                </li>
            </ul>
            <ul class="navbar-nav fw-semibold" role="">
                @if (Auth::check())
                    <li class="nav-item dropdown d-flex align-items-center">
                        <button type="button" class="rounded-circle border border-2 border-secondary" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/frontend/images/user.png') }}" style="width: 30px; height: 30px;"
                                alt="">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="text-uppercase btn btn-outline-primary fw-bold d-flex align-items-center"
                            style="font-size: 13px;">
                            <i class="ri-shield-user-line fs-6"></i> <span class="ps-2">Sign In / Join</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
