document.addEventListener('DOMContentLoaded', () => {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth', // Affichage de base
        selectable: true, // Capacité de pouvoir sélectionner
        editable: true,
        dayMaxEvents: true, // Si trop d'event un pop up s'affiche

        // Menu de navigation
        headerToolbar: {
            left: 'prev, next today',
            center: 'title',
            right: 'dayGridMonth, timeGridWeek, timeGridDay'
        },

        // Action lors de la sélection de date
        select: (info) => {
            viderFormulaire();

            $("#btnSave").prop("disabled", false);
            $("#btnmodifier").prop("disabled", true);
            $("#btnsupprimer").prop("disabled", true);

            moisStart = (info.start.getMonth() + 1);
            jourStart = (info.start.getDate());
            anneeStart = (info.start.getFullYear());
            heureStart = (info.start.getHours() - 1 + ":" + info.start.getMinutes());

            moisStart = (moisStart < 10) ? "0" + moisStart : moisStart;
            jourStart = (jourStart < 10) ? "0" + jourStart : jourStart;

            moisEnd = (info.end.getMonth() + 1);
            jourEnd = (info.end.getDate() - 1);
            anneeEnd = (info.end.getFullYear());
            heureEnd = (info.end.getHours() - 1 + ":" + info.end.getMinutes());

            moisEnd = (moisEnd < 10) ? "0" + moisEnd : moisEnd;
            jourEnd = (jourEnd < 10) ? "0" + jourEnd : jourEnd;

            $('#startrdv').val(anneeStart + "-" + moisStart + "-" + jourStart + " " + heureStart);
            $('#endrdv').val(anneeEnd + "-" + moisEnd + "-" + jourEnd + " " + heureEnd);
            $('#Modal').modal();
        },

        eventClick: (info) => {
            $("#btnSave").prop("disabled", true);
            $("#btnmodifier").prop("disabled", false);
            $("#btnsupprimer").prop("disabled", false);

            $('#idrdv').val(info.event.id);
            $('#titrerdv').val(info.event.title);
            moisStart = (info.event.start.getMonth() + 1);
            jourStart = (info.event.start.getDate());
            anneeStart = (info.event.start.getFullYear());
            heureStart = (info.event.start.getHours() - 1 + ":" + info.event.start.getMinutes());

            moisStart = (moisStart < 10) ? "0" + moisStart : moisStart;
            jourStart = (jourStart < 10) ? "0" + jourStart : jourStart;

            moisEnd = (info.event.end.getMonth() + 1);
            jourEnd = (info.event.end.getDate());
            anneeEnd = (info.event.end.getFullYear());
            heureEnd = (info.event.end.getHours() - 1 + ":" + info.event.end.getMinutes());

            moisEnd = (moisEnd < 10) ? "0" + moisEnd : moisEnd;
            jourEnd = (jourEnd < 10) ? "0" + jourEnd : jourEnd;
            $('#startrdv').val(anneeStart + "-" + moisStart + "-" + jourStart + " " + heureStart);
            $('#endrdv').val(anneeEnd + "-" + moisEnd + "-" + jourEnd + " " + heureEnd);
            $('#Modal').modal();
        },

        events: url_show,
    });

    calendar.render();
    calendar.updateSize();
    calendar.setOption('locale', 'fr');

    $('#save').click(() => {
        ObjEvent = dataGUI("POST");
        envoyerInformation('', ObjEvent);
    });

    $('#btnsupprimer').click(() => {
        ObjEvent = dataGUI("DELETE");
        envoieInformation('/' + $("#idrdv").val(), ObjEvent);
    });

    $('#btnmodifier').click(() => {
        ObjEvent = dataGUI("PATCH");
        envoieInformation('/' + $("#idrdv").val(), ObjEvent);
    });

    function dataGUI(method) {
        nouveauEvent = {
            id: $('#idrdv').val(),
            title: $('#titrerdv').val(),
            start: $('#startrdv').val(),
            end: $('#endrdv').val(),
            userId: "",
            '_token': $("meta[name='csrf-token']").attr("content"),
            '_method': method
        }

        return (nouveauEvent);
    }

    function envoyerInformation(action, objEvent) {
        $.ajax(
            {
                type: "POST",
                url: url_cree,
                data: objEvent,
                success: (msg) => {
                    console.log(msg);
                    $('#Modal').modal('toggle');
                    calendar.refetchEvents();
                },
                error: () => {
                    alert("Oups, une erreur est survenue !");
                }
            }
        )
    }

    function envoieInformation(action, objEvent) {
        $.ajax(
            {
                type: "POST",
                url: url_ + action,
                data: objEvent,
                success: (msg) => {
                    console.log(msg);
                    $('#Modal').modal('toggle');
                    calendar.refetchEvents();
                },
                error: () => {
                    alert("Oups, une erreur est survenue !");
                }
            }
        )
    }

    function viderFormulaire() {
        $('#idrdv').val("");
        $('#titrerdv').val("");
        $('#startrdv').val("");
        $('#endrdv').val("");
    }
});
