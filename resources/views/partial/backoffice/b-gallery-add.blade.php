<div class="w-3/6 p-6 bg-white flex flex-col gap-4">

    {{-- Nouvelle photo --}}
    <form action="/admin/gallery" method="post" enctype="multipart/form-data"
        class='p-6 bg-white flex flex-col items-center justify-center gap-3'>
        @csrf
        {{-- Ajout photo --}}
        <label
            class='w-28 h-28 border-2 my-3 border-slate-500 hover:text-[#D8BA8D] rounded-full flex justify-center items-center cursor-pointer'
            for="image">
            <input type="file" name="image" id="image" class='hidden' required>
            <span class='text-6xl'>+</span>
        </label>

        <!-- Title -->
        <div class='flex items-center gap-3'>
            <x-input-label class='m-0' for="title" :value="__('Title : ')" />

            <x-text-input id="title" class="block mt-1 w-72 placeholder:lowercase placeholder:italic" type="text"
                name="title" :value="old('title')" placeholder='examples: Room View, Beach...' required autofocus />
        </div>

        <!-- Catégorie -->
        <div class='flex items-center gap-3'>
            <label for="category" class=' mx-auto font-medium text-sm text-gray-700 m-0'>Categories :</label>
            <select name="category" id="category"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 capitalize">

                @if (request()->is('admin/gallerycategory/*'))
                    <option value="{{ $category ->id }}">{{ $category ->category }}</option>
                @else
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" class='capitalize'>{{ $category->category }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>


        <button class='bg-[#444444] p-2 text-white rounded-sm hover:bg-[#222222] uppercase'>Add</button>
    </form>

</div>
