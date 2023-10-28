<div class="col-md-3 mb-sm-0 mb-4 sidebar">
    <div class="card px-3 py-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('profile') ? 'active' : '' }}" aria-current="page" href="{{ route('profile') }}">
                    <i class="ri-file-user-fill fs-5"></i> My Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('my.booking') ? 'active' : '' }}" href="{{ route('my.booking') }}">
                    <i class="ri-book-mark-line fs-5"></i> My Booking
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('change.password') ? 'active' : '' }}" href="{{ route('change.password') }}">
                    <i class="ri-lock-password-line fs-5"></i> Change Password
                </a>
            </li>
        </ul>
    </div>
</div>