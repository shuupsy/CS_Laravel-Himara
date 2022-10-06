<!-- ========== PAGE TITLE ========== -->
<div class="page-title gradient-overlay op6"
    style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
        <div class="inner">
            @if (request()->is('staff'))
                <h1>Our Staff</h1>
            @else
                <h1>{{ substr_replace(ucfirst(Route::current()->getName()), '', -6) }}</h1>
            @endif

            <ol class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li class='capitalize'>{{ substr_replace(ucfirst(Route::current()->getName()), '', -6) }}</li>
            </ol>
        </div>
    </div>
</div>
