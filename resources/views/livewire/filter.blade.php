<div class="container-fluid">
    <label class="mt-3">
        <input type="text" wire:model="searchTerm" placeholder="Rechercher..." class="form-control m-3">
    </label>

    <div class="card-group">
        @foreach ($news as $new)
            <div class="col-lg-4 col-sm-6 mb-2 mt-3">
                <div class="card">
                    <div class="card-header">
                        <button class="sr-only">{{$new->title}}</button>
                        @if ($new->read_state === 'consulté')
                            <p class="float-right">&#10004; {{$new->read_state}}</p>
                            <button class="sr-only">{{$new->read_state}}</button>
                        @else
                            <p class="float-right">&#10060; {{$new->read_state}}</p>
                            <button class="sr-only">{{$new->read_state}}</button>
                        @endif
                        <h5 class="card-title font-bold">{{ $new->title }}</h5>
                    </div>

                    @if ($new->read_state === 'non lu')
                        <div class="card-body card border-danger">
                            @else
                                <div class="card-body card border-success">
                                    @endif
                                    <p class="card-text">{{ $new->user }}</p>
                                    <button class="sr-only">Posté par {{$new->user}}</button>

                                    <p class="text-muted font-bold">Département {{ $new->department }} </p>
                                    <button class="sr-only">Département {{$new->department}}</button>
                                    <p>{{ $new->informations }}</p>
                                    <button class="sr-only">{{$new->informations}}</button>
                                    @if ($new->url != null)
                                        <p class="text-muted font-italic">Cette actualité inclue une vidéo.</p>
                                        <button class="sr-only">Cette actualité inclue une vidéo.</button>

                                    @endif
                                    <p class="text-muted">Ajoutée le {{ $new->created_at->format('d/m/y à H:m') }}</p>
                                    <button class="sr-only">Ajoutée le  {{ $new->created_at->format('d/m/y à H:m') }}</button>
                                    <a href="{{url('new/' . $new->id)}}" class="btn btn-success">
                                        Plus de détails
                                    </a>
                                </div>
                        </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container mt-5" style="text-align: center">
        <div class="format">
            {{$news->links('livewire.pagination')}}
        </div>
    </div>

    <br>
    <br>

</div>

<style>
    .format {
        display: inline-block;
    }
</style>
