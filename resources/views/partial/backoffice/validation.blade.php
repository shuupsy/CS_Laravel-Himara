@if (session()->has('success'))
    <div class='bg-white w-2/5 mx-12 my-2 text-sm px-6 py-2'>{{ session()->get('success') }}</div>
@elseif (session()->has('errors'))
    <div class='bg-white w-2/5 mx-12 text-red-600 my-2 text-sm px-6 py-2'>{{ session()->get('errors') }}</div>
@endif
