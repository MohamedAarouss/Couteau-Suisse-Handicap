<div>
    <br>
    <div class="card">
        @foreach ($news as $new)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{{ $new->user }}</p>
                        <p>{{ $new->department }} </p>
                        <p>{{ $new->informations }}</p>
                        <p>{{ $new->created_at->format('d/m/y H:m') }}</p>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{url('news/' . $new->id)}}" class="btn btn-success ml-3">Voir plus
                    d'informations</a>
            </div>
        @endforeach
    </div>
    {{$news->links()}}
</div>
