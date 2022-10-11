<nav class="w-2/12 h-screen flex flex-col justify-between bg-white border-b border-gray-100 px-6 pt-6 pb-3">
    <div class='flex flex-col gap-10'>
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col gap-3">
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Infos Hotel
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Services
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Rooms
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Restaurant
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Staff
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                About
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Ads
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Sliders
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Gallery
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Blog
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                Users
            </a>
        </div>
    </div>


    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">
            Log Out
        </a>
    </form>
</nav>
