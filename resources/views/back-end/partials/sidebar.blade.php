<div class="min-height-300 bg-dark position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('argon/assets/img/logo-ct-dark.png') }}" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Creative Tim</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div style="height: 100%" class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard Menu -->
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- User Manager Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-badge text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Manager</span>
                </a>
            </li>

            <!-- Site Pages Heading -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Site Pages</h6>
            </li>

            <!-- Intro Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('intros.index') ? route('intros.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Intro</span>
                </a>
            </li>

            <!-- Slider Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('sliders.index') ? route('sliders.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-image text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sliders</span>
                </a>
            </li>

            <!-- Services Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('services.index') ? route('services.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
            </li>

            <!-- Projects Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('projects.index') ? route('projects.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-folder-17 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Projects</span>
                </a>
            </li>

            <!-- Contact Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('contact.index') ? route('contact.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-send text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Contact</span>
                </a>
            </li>

            <!-- About Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('about.index') ? route('about.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">About</span>
                </a>
            </li>

            <!-- Team Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route::has('team.index') ? route('team.index') : '#' }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Team</span>
                </a>
            </li>

            <!-- Account Pages Heading -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>

            <!-- Reset Password Menu -->
            @if(Route::has('profile.edit'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('password.reset.form') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-key-25 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reset Password</span>
                </a>
            </li>
            @endif

            <!-- Sign Out Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>
