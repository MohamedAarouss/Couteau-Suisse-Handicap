<div class="container-fluid">
    <label>
        <input type="text" wire:model="searchTerm" placeholder="Rechercher..." class="form-control m-3">
    </label>

    <div class="card-group">
        @foreach ($news as $new)
            <div class="col-lg-4 col-sm-6 mb-2 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title font-bold">{{ $new->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $new->username }}</p>
                        <p class="text-muted font-bold">Département {{ $new->department }} </p>
                        <p>{{ $new->informations }}</p>
                        @if($new->url != null)
                            <p class="text-muted font-italic">Cette actualité inclus une vidéo</p>
                        @endif
                        <p class="text-muted">{{ $new->created_at->format('d/m/y H:m') }}</p>
                        <a href="{{url('new/' . $new->id)}}" class="btn btn-success">
                            Plus de details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container mt-3" style="text-align: left">
        <div class="format">
            {{$news->links('livewire.pagination')}}
        </div>
    </div>
</div>

<style>
    .format {
        display: inline-block;
    }
</style>
