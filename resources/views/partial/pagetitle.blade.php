<!-- ========== PAGE TITLE ========== -->
<div class="page-title gradient-overlay op6"
    style="background: url(/images/breadcrumb.jpg); background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
        <div class="inner">
            @if (request()->is('staff'))
                <h1>Our Staff</h1>
            @elseif (request()->is('rooms/*'))
                <h1>@yield('title')</h1>
            @else
                <h1>{{ ucfirst(Route::current()->getName()) }}</h1>
            @endif

            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>

                @if (request()->is('rooms/*'))
                    <li>
                        <a href="/rooms">Rooms</a>
                    </li>
                    <li class='capitalize'>@yield('title')</li>
                @else
                    <li class='capitalize'>{{ ucfirst(Route::current()->getName()) }}</li>
                @endif


            </ol>
        </div>
    </div>
</div>
