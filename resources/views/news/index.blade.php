<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualité') }}
        </h2>
    </x-slot>

    <!-- Afficher le bouton de création de news seulement pour les administrateurs -->
    <div class="float-right">
        @if (Auth::user()->role ==='admin')
            <a href="{{url('news/create')}}"
               class="btn btn-primary mt-3 mr-2">
                Ajouter une nouvelle news
            </a>
        @endif
    </div>

    <!-- Affichage des éléments de l'actualité et d'une barre de recherche -->
    @livewire('filter')
    @include('footer')
</x-app-layout>

<style>
    a:link {
        text-decoration: none;
        color: black;
    }
</style>
