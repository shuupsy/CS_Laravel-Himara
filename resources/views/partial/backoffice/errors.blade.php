@if (session()->has('errors'))
    <div class='bg-white text-red-600 w-2/5 mx-12 my-2 text-sm px-6 py-2'>
        <h2>Il y a eu un problème...</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif