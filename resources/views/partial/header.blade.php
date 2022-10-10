<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="/">
                    <img src="/{{ $hotel->logo }}" alt="Hotel {{ $hotel->name }}">
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
                <li class="menu-item dropdown
                {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="/">HOME</a>
                </li>

                {{-- Navlink - ROOMS --}}
                <li class="menu-item dropdown
                {{ request()->routeIs('rooms.*') ? 'active' : '' }}">
                    <a href="{{ route('rooms.index') }}">ROOMS</a>
                </li>

                {{-- Navlink - TEAM --}}
                <li class="menu-item dropdown
                {{ request()->routeIs('staff.*') ? 'active' : '' }}">
                    <a href="{{ route('staff.index') }}">TEAM</a>
                </li>

                {{-- Navlink - GALLERY --}}
                <li class="menu-item dropdown
                {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                    <a href="{{ route('gallery.index') }}">GALLERY</a>
                </li>

                {{-- Navlink - CONTACT --}}
                <li class="menu-item
                {{ request()->routeIs('contact.*') ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}">CONTACT US</a>
                </li>

                <li class="menu-item dropdown">
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
                </li>

                {{-- Bouton Login / Register --}}
                @if (Route::has('login'))
                    {{-- Si connecté --}}
                    @auth
                    <li class="menu-item menu-btn">
                        <a href="{{ url('/dashboard') }}"
                            class="btn">
                            <i class="fa fa-user"></i>
                            Profile
                        </a>
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
