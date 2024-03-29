<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="/">
                    <img src="/images/logos/{{ $hotel->logo }}" alt="Hotel {{ $hotel->name }}">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                {{-- Navlink - HOME --}}
                <li class="menu-item
                {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="/">HOME</a>
                </li>

                {{-- Navlink - ROOMS --}}
                <li class="menu-item
                {{ request()->is('rooms/*') || request()->is('rooms') ? 'active' : '' }}">
                    <a href="{{ route('rooms') }}">ROOMS</a>
                </li>

                {{-- Navlink - TEAM --}}
                <li class="menu-item
                {{ request()->routeIs('staff') ? 'active' : '' }}">
                    <a href="{{ route('staff') }}">TEAM</a>
                </li>

                {{-- Navlink - GALLERY --}}
                <li class="menu-item
                {{ request()->routeIs('gallery') ? 'active' : '' }}">
                    <a href="{{ route('gallery') }}">GALLERY</a>
                </li>

                {{-- Navlink - CONTACT --}}
                <li class="menu-item
                {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>

                {{-- <li class="menu-item dropdown">
                    <a href="#">ELEMENTS</a>
                    <ul class="submenu">
                        <li class="menu-item">
                            <a href="style-guide.html">Style Guide</a>
                        </li>
                        <li class="menu-item">
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li class="menu-item">
                            <a href="icons.html">Icons</a>
                        </li>
                    </ul>
                </li> --}}

                {{-- Bouton Login / Register --}}
                @if (Route::has('login'))
                    {{-- Si connecté --}}
                    @auth
                        <li class="menu-item menu-btn dropdown">
                            <a href="{{ url('/dashboard') }}" class="btn">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                            <ul class="submenu">
                                {{-- Backoffice --}}
                                @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                    <li class="menu-item">
                                        <a href="/admin">Backoffice ADMIN</a>
                                    </li>
                                @endif

                                {{-- Logout --}}
                                <li class="menu-item">
                                    <form action="{{ route('logout') }}" method='post'>
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                this.closest('form').submit();">LOG
                                            OUT</a>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        {{-- Non connecté --}}
                    @else
                        {{-- Inscription --}}
                        <li class="menu-item menu-btn mx-1">
                            <a href="{{ route('register') }}" class="btn">
                                {{-- <i class="fa fa-user"></i> --}}
                                REGISTER</a>
                        </li>
                        {{-- Connexion --}}
                        <li class="menu-item menu-btn mx-1">
                            <a href="{{ route('login') }}" class="btn">
                                <i class="fa fa-user"></i>
                                LOG IN</a>
                        </li>

                    @endauth
                @endif

            </ul>
        </nav>
    </div>
</header>
