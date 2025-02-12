<header class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline top-contact pull-left">
                    <li>
                        <a href="tel:+2348023456789">
                            <i class="fa fa-phone fa-fw"></i> +234 802 345 6789
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@samlikengineering.com">
                            <i class="fa fa-envelope-o fa-fw"></i> info@samlik.com.ng
                        </a>
                    </li>
                </ul>
                <ul class="list-inline social-links pull-right">
                    <li class="facebook">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                       class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        <i class="fa fa-key"></i>
                                    </a>
                                @endauth
                            </nav>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
