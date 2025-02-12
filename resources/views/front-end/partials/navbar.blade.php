<nav class="navbar main-menu navbar-default" role="navigation">
    <div id="sticker">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" title="logo">
                    <img src="{{ asset('constrion/assets/images/logo.png') }}" alt="logo" />
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" id="menu">
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="hvr-overline-from-center" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="hvr-overline-from-center" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                        <a class="hvr-overline-from-center" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="{{ request()->routeIs('projects') ? 'active' : '' }}">
                        <a class="hvr-overline-from-center" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a class="hvr-overline-from-center" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
