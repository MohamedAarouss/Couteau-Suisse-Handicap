<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NEWS') }}
        </h2>
    </x-slot>



    <div class="card">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $new->title }}</h5>
                    <p class="card-text">{{ $new->user }}</p>
                    <p>{{ $new->department }} </p>
                    <p>{{ $new->informations }}</p>
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
