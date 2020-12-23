<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rendez-vous') }}
        </h2>
    </x-slot>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">

    <meta charset='utf-8' />
    <script>
        var url_="{{url('/event')}}";
        @if(auth()->user()->personnel=="non")
        var url_show="{{url('/fullcalendareventappointmentmaster/show')}}";
        console.log(url_show);
        @else
        var url_show="{{url('/fullcalendareventappointmentmaster/showall')}}";
        console.log(url_show);
        @endif

        var url_cree="{{url('/fullcalendareventappointmentmaster/create')}}";
    </script>
    <script src="{{asset('js/eventAppointment.js')}}"defer></script>

<body>
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Rendez-vous</h4>

                Id:
                <br />
                <input type="text" class="form-control" name="idrdv" id="idrdv">


                Nom Prenom:
                <br />
                <input type="text" class="form-control" name="titrerdv" id="titrerdv">

                Start:
                <br />
                <input type="text" class="form-control" name="startrdv" id="startrdv">
                End:
                <br />
                <input type="text" class="form-control" name="endrdv" id="endrdv">

            </div>

            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="save" type="button" class="btn btn-primary" >Save</button>
                <button id="btnsupprimer" type="button" class="btn btn-danger" >Supprimer</button>
                <button id="btnmodifier" type="button" class="btn btn-warning" >Modifier</button>

            </div>
        </div>
    </div>
</div><div class="modal fade" id="DispoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if(auth()->user()->personnel=="oui")
            <div class="modal-body">
                <h4>Rendez-vous</h4>

                Date du jour de disponibilité (aaaa-mm-jj):
                <br />
                <input type="text" class="form-control" name="startdispo" id="startdispo">

                Heure de debut (hh:mm):
                <br />
                <input type="text" class="form-control" name="heurestartdispo" id="heurestartdispo">
                Heure de fin (hh:mm):
                <br />
                <input type="text" class="form-control" name="heureenddispo" id="heureenddispo">

            </div>
                <div class="modal-footer">
                    <button id="closeDispo" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="saveDispo" type="button" class="btn btn-primary" >Save</button>
                    <button id="btnsupprimerDispo" type="button" class="btn btn-danger" >Supprimer</button>
                    <button id="btnmodifierDispo" type="button" class="btn btn-warning" >Modifier</button>

                </div>
            @else
                <div class="modal-body">

                <h2>Vous ne possédez pas des droits nécessaires </h2>

                </div>
                <div class="modal-footer">
                    <button id="closeDispo" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            @endif


        </div>
    </div>
</div>

<div class="container">
    <div id='calendar'></div>
</div>
</body>
</x-app-layout>

