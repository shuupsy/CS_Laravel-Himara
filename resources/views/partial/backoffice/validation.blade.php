@if (session()->has('success'))
    <div class='bg-white my-2 text-sm px-6 py-2'>{{ session()->get('success') }}</div>
@elseif (session()->has('errors'))
    <div class='bg-white text-red-600 my-2 text-sm px-6 py-2'>{{ session()->get('errors') }}</div>
@endif
