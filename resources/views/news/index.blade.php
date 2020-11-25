<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualité') }}
        </h2>

    </x-slot>

    <!-- Affichage des éléments de l'actualité et d'une barre de recherche -->
    @livewire('filter')
</x-app-layout>

<style>
    a:link {
        text-decoration: none;
        color: black;
    }
</style>
