@extends('layouts.index')

@section('content')
    <section class='container'>
        <h1>Bienvenue {{ $user->first_name }} {{ $user->last_name }} !</h1>
        <h2 class='text-sm'>Gérez votre expérience sur {{ $hotel->name }}</h2>

        <div class='row'>
            {{-- Infos perso --}}
            <div class='col my-2'>
                <a href="">
                    <div class='p-4 border border-1 border-black rounded'>
                        <h3>Informations personnelles</h3>
                        <form action="">
                            @csrf


                        </form>
                    </div>
                </a>
            </div>

            {{-- Sécurité --}}
            <div class='col my-2'>
                <a href="">
                    <div class='p-4 border border-1 border-black rounded'>
                        <h3>Sécurité du compte</h3>
                        <form action="/dashboard/{{ $user->id }}" method='post'>
                            @csrf
                            @method('delete')
                            <button type='submit' class='text-danger px-2'>Supprimer le compte</button>
                        </form>
                    </div>
                </a>
            </div>
        </div>

        <div class='row'>
            {{-- Réservation --}}
            <div class='col my-2'>
                <a href="">
                    <div class='p-4 border border-1 border-black rounded'>
                        <h3>Réservations</h3>
                    </div>
                </a>
            </div>

            {{-- Commentaires --}}
            <div class='col my-2'>
                <a href="">
                    <div class='p-4 border border-1 border-black rounded'>
                        <h3>Commentaires</h3>
                    </div>
                </a>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
                <a href="">
                    <div class='p-4 border border-1 border-black rounded'>
                        <h3>Choix du slider principal</h3>
                        <div class="d-flex">
                            @foreach ($sliders as $slider)
                                <label class='flex flex-col items-center gap-1'>
                                    <img src="/images/slider/{{ $slider->background_img }}" alt="">

                                    <input type="radio" name="slider" value="{{ $slider->id }}" id="logo"
                                        {{ $loop->index == 0 ? 'checked' : '' }}>
                                </label>
                            @endforeach
                        </div>


                    </div>
                </a>
            </div>
        </div>

    </section>
@endsection

{{-- <x-app-layout>

</x-app-layout>
 --}}
