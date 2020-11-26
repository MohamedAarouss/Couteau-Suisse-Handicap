<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!--Calendar-->

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<x-app-layout>
    <body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENT') }}
        </h2>
    </x-slot>


    <div class="container">

        <div class="response alert alert-success mt-2" style="display: none;"></div>

        <div id='calendar'></div>

    </div>

    <div class="sortable">
        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800">
                Scolarité
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container" style="border: solid 1px">
                <div class="text-center red m-2 square move">
                    <a class="link-size" id="dossier" href="#">
                        Mon dossier
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="sms" href="#">
                        Alert SMS
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="actu" href="#">
                        Actualité & documents
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="emploi_univ"
                       href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                       target="_blank">
                        Offres
                        d'emploi de l'université
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation"
                       target="_blank">
                        Career
                        Center
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil"
                       target="_blank">
                        Contrat pédagogique
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="convention"
                       href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                       target="_blank">
                        Convention de stage
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="transferts"
                       href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                       target="_blank">
                        Transferts-departs
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic"
                       target="_blank">
                        Inscription au
                        TOEIC
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="ia_web"
                       href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                       target="_blank">
                        IA Web
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique"
                       target="_blank">
                        IP Web
                    </a>
                </div>

                <div class="red m-2 square move">
                    <a class="link-size" id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles"
                       target="_blank">
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
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container" style="border: solid 1px">
                <div class="green m-2 square move">
                    <a class="link-size" id="moodle" href="https://moodle.univ-artois.fr/cours/"
                       target="_blank">
                        Moodle
                    </a>
                </div>

                <div class="green m-2 square move">
                    <a class="link-size" id="maison_des_langues"
                       href="http://www.univ-artois.fr/formations/la-maison-des-langues"
                       target="_blank">Maison
                        des langues</a>
                </div>

                <div class="green m-2 square move">
                    <a class="link-size" id="cles"
                       href="http://www.univ-artois.fr/formations/certifications/cles"
                       target="_blank">CLES</a>
                </div>

                <div class="green m-2 square move">
                    <a class="link-size" id="ressource_pedagogique"
                       href="http://www.sup-numerique.gouv.fr/" target="_blank">Ressources
                        pédagogiques</a>
                </div>

                <div class="green m-2 square move">
                    <a class="link-size" id="covoit_artois"
                       href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte"
                       target="_blank">CoVoit'Artois</a>
                </div>

                <div class="green m-2 square move">
                    <a class="link-size" id="sport"
                       href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank">Inscriptions
                        Activités Sportives</a>
                </div>
            </div>

        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Aide
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container" style="border: solid 1px">
                <div class="grey m-2 square move">
                    <a class="link-size" href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html">Tutoriels
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Bureau virtuel
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container" style="border: solid 1px">
                <div class="orange m-2 square move">
                    <a class="link-size" href="https://wmailetu.univ-artois.fr/"
                       target="_blank">Mon webmail</a>
                </div>

                <div class="orange m-2 square move">
                    <a class="link-size" href="#">Annuaire</a>
                </div>

                <div class="orange m-2 square move">
                    <a class="link-size" href="https://monmotdepasse.univ-artois.fr/"
                       target="_blank">Changement de mot de
                        passe</a>
                </div>

                <div class="orange m-2 square move">
                    <a class="link-size"
                       href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
                       target="_blank">Listes de diffusion</a>
                </div>

                <div class="orange m-2 square move">
                    <a class="link-size" href="http://esupweb.univ-artois.fr/esup/pages/zoom/" target="_blank">Zoom</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Intranet
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container" style="border: solid 1px">
                <div class="purple ge m-2 square move">
                    <a class="link-size" href="http://intranet.univ-artois.fr/etudiant"
                       target="_blank">Intranet</a>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Documentation
                <span class="move">+</span>
            </h2>

            <div class="row m-4 child-container">
                <div class="blue m-2 square move">
                    <a class="link-size"
                       href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
                       target="_blank">Encyclopaedia Universalis</a>
                </div>

                <div class="blue m-2 square move">
                    <a class="link-size"
                       href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
                       target="_blank">Bibliothèques</a>
                </div>

                <div class="blue m-2 square move">
                    <a class="link-size" href="http://univ-numerique.fr/"
                       target="_blank">UNT</a>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" id="btnSave">Save</button>
        <button class="btn btn-primary" id="btnClear">ClearSave</button>
    </div>
    </body>
</x-app-layout>

</html>

<script>
    // Sort the parents
    $(".sortable").sortable({
        connectWith: ".connectedSortable",
        placeholder: 'movable-placeholder',
        tolerance: 'pointer',
        cancel: ".fixed",
        cursor: 'move',
        containment: "document",
        items: "> div",
        handle: ".move",
        opacity: 0.7,
        delay: 150,
        start: (e, ui) => {
            ui.placeholder.height(ui.helper.outerHeight());
        }
    });

    // Sort the children
    $(".child-container").sortable({
        items: "> div",
        tolerance: "pointer",
        containment: "document",
        connectWith: '.child-container'
    });


    $(function () {

        $(".sortable").sortable({
            update: function (event, ui) {
                save1();
            }
        });
        $(".sortable").disableSelection();
        $("#btnClear").attr("Disabled", "Disabled");

        // get shopping list from localStorage or create the list if it's not there
        var shopping;
        if (!localStorage.shoppingText) {
            // make an array of shopping items
            //shopping = ["Apples", "Avocados", "Pears", "Plums", "Tomatoes", "Watermelons", "Pineapples", "Asparagus", "Broccoli", "Salad Greens", "Bread", "Laundry Soap", "Dish Soap", "Tofu", "Hand Soap", "Shampoo", "Oranges", "Kitchen Bags", "Batteries"];
            //shopping.sort();
        } else {
            var shoppingText = localStorage.shoppingText;
            shopping = shoppingText.split(",");
        }

        /* build the list of shopping items */
        // a temporary variable in which to build a the list items
        var textToInsert = "";
        // using $.each() to iterate over the collection
        $.each(shopping, function (count, item) {
            textToInsert += "<li  class=\"ui-state-default\"><span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>" + item + "</li>";
        });
        // add the string with all the items to the list
        $(".sortable").append(textToInsert);

        $("#btnSave").click(function (event) {
            // not really required because we will save whenever we update the list
            event.preventDefault();
            save1();
        });

        $("#btnClear").click(function (event) {
            // clear localStorage so we can start fresh
            event.preventDefault();
            localStorage.removeItem("shoppingText");
            $("#btnSave").removeAttr("Disabled");
            $(this).attr("Disabled", "Disabled");
        });

        function save1() {
            // put items in sortable into an array
            var theArray = [];
            $("div", ".sortable").each(function (count, item) {
                theArray[count] = $(this).text();
            });
            var shoppingText = theArray.toString();
            localStorage.setItem("shoppingText", shoppingText);
            $("#btnClear").removeAttr("Disabled");
            $("#btnSave").attr("Disabled", "Disabled");
            //console.log(localStorage.shoppingText);
        }
    });
</script>

<script>

    $(document).ready(function () {
        var initialLocaleCode = 'fr';

        var SITEURL = "{{url('/')}}";

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },

        });



        var calendar = $('#calendar').fullCalendar({

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay,listMonth'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            locale: initialLocaleCode,
            dayMaxEvents: true,



            events: SITEURL + "/fullcalendareventmaster",

            displayEventTime: true,




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

                var userId=1;



                if (title) {

                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");

                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");



                    $.ajax({

                        url: SITEURL + "/fullcalendareventmaster/create",

                        data: 'title=' + title + '&start=' + start + '&end=' + end + '&userId='+userId,

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

                            userId:userId,

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

    .movable-placeholder {
        background: #ccc;
        width: auto;
        height: auto;
        padding: 20px;
        margin: 0 0 15px 0;
        border-style: dashed;
        border-width: 2px;
        border-color: #000;
    }

    .move {
        cursor: grab;
    }

    .child-container {
        border: solid 1px;
        resize: both;
        overflow: auto;
        min-height: 130px;
        max-height: 505px;
        min-width: 410px;
        max-width: 660px;
    }

    .link-size {
        padding: 8px;
    }
</style>
