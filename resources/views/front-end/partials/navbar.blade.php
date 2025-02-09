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
                    <li class="active">
                        <a class="hvr-overline-from-center" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="hvr-overline-from-center" href="{{ Route::has('about.index') ? route('about.index') : '#' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="hvr-overline-from-center" href="{{ Route::has('services.index') ? route('services.index') : '#' }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a class="hvr-overline-from-center" href="{{ Route::has('projects.index') ? route('projects.index') : '#' }}">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a class="hvr-overline-from-center" href="{{ Route::has('contact.index') ? route('contact.index') : '#' }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
