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

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'UTC',

                initialView: 'dayGridMonth',//affichage de base
                selectable: true,//capacité de pouvoir selectioner
                editable: true,
                dayMaxEvents: true,//si trop d'event un pop up s'affiche

                //menu de navigation
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },

                //action lors d'un click sur une date
                /*dateClick: function(info) {
                    var nom=prompt("Entrez votre nom et prénom")
                    calendar.addEvent({
                        title:nom,
                        start:info.dateStr,
                    })
                },*/

                //action lors de la selection de date
                select: function(info) {
                    $('#startrdv').val(info.startStr);
                    $('#endrdv').val(info.endStr);
                    $('#Modal').modal();
                    //var nom=prompt("Entrez votre nom et prénom");
                    /*calendar.addEvent({
                        title:$('#titrerdv').val(),
                        start:info.startStr,
                        end:info.endStr,

                    }) */},
                eventClick:function(info){
                    $('#idrdv').val(info.event.id);
                    $('#titrerdv').val(info.event.title);
                    moisStart=(info.event.start.getMonth()+1);
                    jourStart=(info.event.start.getDate());
                    anneeStart=(info.event.start.getFullYear());
                    heureStart=(info.event.start.getHours()-1+":"+info.event.start.getMinutes());

                    moisStart=(moisStart<10)?"0"+moisStart:moisStart;
                    jourStart=(jourStart<10)?"0"+jourStart:jourStart;

                    moisEnd=(info.event.end.getMonth()+1);
                    jourEnd=(info.event.end.getDate());
                    anneeEnd=(info.event.end.getFullYear());
                    heureEnd=(info.event.end.getHours()-1+":"+info.event.end.getMinutes());

                    moisEnd=(moisEnd<10)?"0"+moisEnd:moisEnd;
                    jourEnd=(jourEnd<10)?"0"+jourEnd:jourEnd;
                    $('#startrdv').val(anneeStart+"-"+moisStart+"-"+jourStart+" "+heureStart);
                    $('#endrdv').val(anneeEnd+"-"+moisEnd+"-"+jourEnd+" "+heureEnd);
                    $('#Modal').modal();
                },

                events:"{{url('/fullcalendareventappointmentmaster/show')}}"

            });
            calendar.render();
            calendar.updateSize();
            calendar.setOption('locale', 'fr');

            $('#save').click(function(){
                ObjEvent=dataGUI("POST");
                EnvoyerInformation('',ObjEvent);

            });
            function dataGUI(method){
                //$user=Auth::user();
                nouveauEvent= {
                    id:$('#idrdv').val(),
                    title:$('#titrerdv').val(),
                    start:$('#startrdv').val(),
                    end:$('#endrdv').val(),
                    userId:1,
                    '_token':$("meta[name='csrf-token']").attr("content"),
                    '_method':method
                }
                return(nouveauEvent);

            }
            function EnvoyerInformation(action,objEvent){
                $.ajax(
                    {
                        type:"POST",
                        url:"{{url('/fullcalendareventappointmentmaster/create')}}",
                        data:objEvent,
                        success:function(msg){console.log(msg);
                        $('#Modal').modal('toggle');
                        calendar.refetchEvents();
                        },
                        error:function(){alert("Une erreur");}

                    }
                )
            }

        });


    </script>

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

            </div>
        </div>
    </div>
</div>
<div id='calendar'></div>
</body>
</x-app-layout>

