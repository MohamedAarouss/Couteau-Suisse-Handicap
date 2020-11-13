<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


    <!--Calendar-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles

</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENT') }}
        </h2>
    </x-slot>


    <div class="container">

        <div class="response alert alert-success mt-2" style="display: none;"></div>

        <div id='calendar'></div>

    </div>

    <div class="container">
            <div class="font-semibold text-xl text-gray-800">
                Scolarité
            </div>


            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="text-center red m-2 square">
                    <a id="dossier" href="#">
                        Mon dossier
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="sms" href="#">
                        Alert SMS
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="actu" href="#">
                        Actualité & documents
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="emploi_univ" href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                       target="_blank">
                        Offres
                        d'emploi de l'université
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank">
                        Career
                        Center
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil" target="_blank">
                        Contrat pédagogique
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="convention"
                       href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                       target="_blank">
                        Convention de stage
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="transferts"
                       href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                       target="_blank">
                        Transferts-departs
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic" target="_blank">
                        Inscription au
                        TOEIC
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="ia_web"
                       href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                       target="_blank">
                        IA Web
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank">
                        IP Web
                    </a>
                </div>

                <div class="red m-2 square">
                    <a id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles" target="_blank">
                        Inscription
                        au
                        CLES
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Campus en ligne
            </h2>

            <!-- Importation du component Counter
            <livewire:counter/>
            -->

            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="green m-2 square">
                    <a id="moodle" href="https://moodle.univ-artois.fr/cours/"
                       target="_blank">
                        Moodle
                    </a>
                </div>

                <div class="green m-2 square">
                    <a id="maison_des_langues"
                       href="http://www.univ-artois.fr/formations/la-maison-des-langues"
                       target="_blank">Maison
                        des langues</a>
                </div>

                <div class="green m-2 square">
                    <a id="cles"
                       href="http://www.univ-artois.fr/formations/certifications/cles"
                       target="_blank">CLES</a>
                </div>

                <div class="green m-2 square">
                    <a id="ressource_pedagogique"
                       href="http://www.sup-numerique.gouv.fr/" target="_blank">Ressources
                        pédagogiques</a>
                </div>

                <div class="green m-2 square">
                    <a id="covoit_artois"
                       href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte"
                       target="_blank">CoVoit'Artois</a>
                </div>

                <div class="green m-2 square">
                    <a id="sport"
                       href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank">Inscriptions
                        Activités Sportives</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Aide
            </h2>


            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="grey m-2 square">
                    <a id="tuto"
                       href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html">Tutoriels</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Bureau virtuel
            </h2>

            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="orange m-2 square">
                    <a id="webmail" class="sortable orange column-space col-sm" href="https://wmailetu.univ-artois.fr/"
                       target="_blank">Mon webmail</a>
                </div>

                <div class="orange m-2 square">
                    <a id="annuaire" href="#">Annuaire</a>
                </div>

                <div class="orange m-2 square">
                    <a id="mdp" href="https://monmotdepasse.univ-artois.fr/"
                       target="_blank">Changement de mot de
                        passe</a>
                </div>

                <div class="orange m-2 square">
                    <a id="liste"
                       href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
                       target="_blank">Listes de diffusion</a>
                </div>

                <div class="orange m-2 square">
                    <a id="zoom"
                       href="http://esupweb.univ-artois.fr/esup/pages/zoom/" target="_blank">Zoom</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Intranet
            </h2>

            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="purple ge m-2 square">
                    <a id="net" href="http://intranet.univ-artois.fr/etudiant"
                       target="_blank">Intranet</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Documentation
            </h2>

            <div class="col-md-4 d-flex flex-center flex-wrap sortable">
                <div class="blue m-2 square">
                    <a id="encyclopedie"
                       href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
                       target="_blank">Encyclopaedia Universalis</a>
                </div>

                <div class="blue m-2 square">
                    <a id="bibliotheque"
                       href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
                       target="_blank">Bibliothèques</a>
                </div>

                <div class="blue m-2 square">
                    <a id="unt" href="http://univ-numerique.fr/"
                       target="_blank">UNT</a>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    </body>
</x-app-layout>

</html>

<script>
    $(".sortable").sortable({containment:'document'});
    $(".sortable").draggable({containment:'document', revert:true});
    $( ".super" ).droppable({
        drop: function( event, ui ) {
            alert('drop');
            $.ajax({
                'success':function () {
                    $('.super').append(ui);
                }
            });

        }
    });
</script>

<script>

    $(document).ready(function () {

        var SITEURL = "{{url('/')}}";

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        var calendar = $('#calendar').fullCalendar({

            editable: true,

            events: SITEURL + "/fullcalendareventmaster",

            displayEventTime: true,

            editable: true,

            eventRender: function (event, element, view) {

                if (event.allDay === 'true') {

                    event.allDay = true;

                } else {

                    event.allDay = false;

                }

            },

            selectable: true,

            selectHelper: true,

            select: function (start, end, allDay) {

                var title = prompt('Nom de l\'evenement:');



                if (title) {

                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");



                    $.ajax({

                        url: SITEURL + "/fullcalendareventmaster/create",

                        data: 'title=' + title + '&start=' + start + '&end=' + end,

                        type: "POST",

                        success: function (data) {

                            displayMessage("Ajout effectué");

                            $('#calendar').fullCalendar('removeEvents');

                            $('#calendar').fullCalendar('refetchEvents' );

                        }

                    });

                    calendar.fullCalendar('renderEvent',

                        {

                            title: title,

                            start: start,

                            end: end,

                            allDay: allDay

                        },

                        true

                    );

                }

                calendar.fullCalendar('unselect');

            },



            eventDrop: function (event, delta) {

                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");

                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                $.ajax({

                    url: SITEURL + '/fullcalendareventmaster/update',

                    data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,

                    type: "POST",

                    success: function (response) {

                        displayMessage("Modification effectué");

                    }

                });

            },

            eventClick: function (event) {

                var deleteMsg = confirm("Voulez-vous supprimer?");

                if (deleteMsg) {

                    $.ajax({

                        type: "POST",

                        url: SITEURL + '/fullcalendareventmaster/delete',

                        data: "&id=" + event.id,

                        success: function (response) {

                            if(parseInt(response) > 0) {

                                $('#calendar').fullCalendar('removeEvents', event.id);

                                displayMessage("Suppression effectué");

                            }

                        }

                    });

                }

            }

        });

    });



    function displayMessage(message) {

        $(".response").css('display','block');

        $(".response").html(""+message+"");

        setInterval(function() { $(".response").fadeOut(); }, 4000);

    }

</script>

<style>
    .red {
        background-color: #e54a12;
        border-radius: 5px;
        text-align: center;
    }

    .green {
        background-color: darkslategray;
        border-radius: 5px;
        text-align: center;
    }

    .orange {
        background-color: orange;
        border-radius: 5px;
        text-align: center;
    }

    .blue {
        background-color: dodgerblue;
        border-radius: 5px;
        text-align: center;
    }

    .purple {
        background-color: rebeccapurple;
        border-radius: 5px;
        text-align: center;
    }

    .grey {
        background-color: gray;
        border-radius: 5px;
        text-align: center;
    }

    .column-space {
        margin: 4px;
    }

    a:link {
        text-decoration: none;
        color: black;
    }

    .square {
        padding-top: 40px;
        height: 110px;
        width: 110px;
        font-size: 15px;
        font-weight: bold;
        font-family: Nunito, serif;
    }

</style>
