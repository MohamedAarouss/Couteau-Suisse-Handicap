<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NEWS') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-header">
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
                <p>{{ $new->img }}</p>
                <p>Crée le {{ $new->created_at->format('d/m/y à H:m') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{url('/news')}}" class="btn btn-success ml-3">Retour</a>
                @if (Auth::user()->role ==='admin')
                    <a href="{{url('new/edit/' . $new->id)}}"
                       class="btn btn-primary ml-3">
                        Modifier une news
                    </a>
                @endif
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
