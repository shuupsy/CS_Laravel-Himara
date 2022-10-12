<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            Welcome to Hotel {{ $hotel->name }}.
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:+18881234567">
                        <i class="fa fa-phone"></i>
                        {{ $hotel->phone }}
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:contact@hotelhimara.com">
                        <i class="fa fa-envelope-o "></i>
                        {{ $hotel->email }}</a>
                </li>

                {{-- Languages --}}
                @if (!request()->is('admin/*'))
                    <li class="language-menu">
                        <a href="#" class="active-language"><img src="/images/icons/flags/gb.png"
                                alt="Image">English</a>
                        <ul class="languages">
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/it.png" alt="Image">Italiano</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/al.png" alt="Image">Shqip</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/fr.png" alt="Image">Français</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src="/images/icons/flags/es.png" alt="Image">Español</a>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>
