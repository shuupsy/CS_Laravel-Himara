<nav class="fixed w-1/6 h-screen flex flex-col justify-between bg-white border-b border-gray-100 px-6 pt-6 pb-3">
    <div class='flex flex-col gap-2'>
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col gap-2">
            <a href="/admin" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm'>
                -> Home
            </a>

            <a href="/admin/info" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Infos Hotel
            </a>

            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Rooms
            </a>

            <a href="/admin/services" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Services
            </a>

            <a href="/admin/restaurant" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Restaurant
            </a>

            <a href="/admin/ads" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Ads
            </a>
            <a href="/admin/sliders" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Sliders
            </a>

            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                About
            </a>

            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Gallery
            </a>
            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Blog
            </a>

            <a href="/admin/staff" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
                Staff
            </a>

            <a href="" class='p-2 text-[#a4a4a4] hover:text-[#ECCB9A] uppercase font-bold text-sm flex justify-center border'>
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
