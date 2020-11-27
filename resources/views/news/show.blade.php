<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NEWS') }}
        </h2>
    </x-slot>

    <!-- Afficher le bouton de création de news seulement pour les administrateurs -->
    <div class="float-right">
        @if (Auth::user()->role ==='admin')
            <a href="{{url('new/edit/' . $new->id)}}"
               class="btn btn-primary mt-3 mr-2">
                Modifier une news
            </a>
        @endif
    </div>

    <div class="card">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $new->title }}</h5>
                    <p class="card-text">{{ $new->username }}</p>
                    <p>{{ $new->department }} </p>
                    <p>{{ $new->informations }}</p>
                    <p>{{ $new->url }}</p>
                    <p>{{ $new->img }}</p>
                    <p>{{ $new->created_at->format('d/m/y H:m')  }}</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <a href="{{url('/news')}}" class="btn btn-success ml-3">Retour</a>
    </div>
</x-app-layout>

<style>
    a:link {
        text-decoration: none;
        color: black;
    }
</style>
