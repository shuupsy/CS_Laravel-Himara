@extends('layouts.index')

@section('content')
    <section class='container'>
        <h1>Bienvenue {{ $user->first_name }} {{ $user->last_name }} !</h1>
        <h2>Gérez votre expérience sur {{ $hotel->name }}</h2>

        <div>

            <a href="">
                <div class='border border-1 border-black rounded'>
                    <h3>Informations personnelles</h3>
                </div>
            </a>

            <a href="">
                <div class='border border-1 border-black rounded'>
                    <h3>Sécurité du compte</h3>
                    <form action="/dashboard/{{ $user->id}}"
                        method='post'>
                        @csrf
                        @method('delete')
                        <button class='text-danger'>Supprimer le compte</button>
                    </form>
                </div>
            </a>

            <a href="">
                <div class='border border-1 border-black rounded'>
                    <h3>Réservations</h3>
                </div>
            </a>

            <a href="">
                <div class='border border-1 border-black rounded'>
                    <h3>Commentaires</h3>
                </div>
            </a>



        </div>
    </section>
@endsection

{{-- <x-app-layout>

</x-app-layout>
 --}}
