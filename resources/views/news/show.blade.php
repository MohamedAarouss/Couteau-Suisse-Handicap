<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualité') }}
        </h2>
    </x-slot>

    <!-- Afficher le bouton de création de news seulement pour les administrateurs -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="float-right">
                    @if (Auth::user()->role ==='admin')
                        <a href="{{url('new/edit/' . $new->id)}}"
                           class="btn btn-primary">
                            Modifier une news
                        </a>

                        <a href="{{url('new/destroy/' . $new->id)}}"
                           onclick="return confirm('Etes-vous sur de vouloir supprimer cette news ?')" class="btn btn-danger">Supprimer
                            l'actualité'</a>
                    @endif
                </div>
                <h3 class="card-title">{{ $new->title }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $new->username }}</p>
                <p class="text-muted font-bold">Département {{ $new->department }} </p>
                <p>{{ $new->informations }}</p>
                @if($new->url != null)
                    <iframe class="col-6"
                            src="https://www.youtube.com/watch?v=XRDhcjAK4lw&t=7s">
                    </iframe>
                @endif
                @if ($new->img !== null)
                    <img src="{{asset('storage/images/' . $new->img)}}"/>
                @endif
            </div>

            <div class="card-footer">
                <a href="{{url('/news')}}" class="btn btn-success ml-3">Retour</a>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    a:link {
        text-decoration: none;
        color: black;
    }
</style>
