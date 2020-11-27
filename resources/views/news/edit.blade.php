<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Modification d'une news") }}
        </h2>
    </x-slot>

    <br>
    <br>

    <div class="container">
        <form action="{{url('new/'.$new->id)}}" enctype="multipart/form-data" method="PATCH">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input id="title"
                               type="text"
                               class="form-control"
                               name="title"
                               tabindex="1"
                               value="{{old('title', $new->title)}}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="department">Département </label>
                        <select id="department"
                                class="form-control"
                                name="department"
                                tabindex="5"
                                value="{{old('department', $new->department)}}"
                                required>
                            <option>Informatique</option>
                            <option>MMI</option>
                            <option>TC</option>
                            <option>GEA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="url">URL<span class="font-italic"> (optionnel)</span></label>
                        <input id="url"
                               type="url"
                               class="form-control"
                               name="url"
                               tabindex="3"
                               value="{{old('url', $new->url)}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="informations">Informations</label>
                        <textarea id="informations"
                                  class="form-control"
                                  name="informations"
                                  minlength="20"
                                  tabindex="2"
                                  value="{{old('informations', $new->informations)}}">
                            </textarea>
                    </div>

                    <div class="form-group">
                        <label for="img">Image<span class="font-italic"> (optionnel)</span></label>
                        <input id="img"
                               type="file"
                               class="form-control"
                               name="img"
                               tabindex="3"
                               value="{{old('img', $new->img)}}">
                    </div>
                </div>
            </div>

            <div class="row flex items-center justify-center mt-5">
                <button type="submit" class="btn btn-outline-success rounded-pill p-3">Modifier une news</button>
            </div>
            <br>
            <br>
            <a href="{{url('/news')}}" type="submit" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</x-app-layout>

<style>

    .container {
        margin-top: 4%;
    }

    form {
        padding: 50px 30px 30px;
        border-radius: 50px;
        border-color: lightgrey;
        border-width: 1px;
        background-color: white;
    }

    textarea {
        height: 124px;
        min-height: 124px;
        max-height: 124px
    }

    .font-italic {
        color: grey;
    }

</style>
