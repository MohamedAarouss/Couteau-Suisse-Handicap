<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"
            integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA=="
            crossorigin="anonymous"></script>

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENT') }}
        </h2>
    </x-slot>

        <div class="container">
            <div class="row sortable mt-3">
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #D2351F">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color: #D2351F">Scolarité
                                <span class="move"><i class="fas fa-arrows-alt"></i></span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: #D2351F;">
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
                                    <a class="link-size" id="emploi_univ" href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                                       target="_blank">
                                        Offres
                                        d'emploi de l'université
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank">
                                        Career
                                        Center
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil" target="_blank">
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
                                    <a class="link-size" id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic" target="_blank">
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
                                    <a class="link-size" id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank">
                                        IP Web
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles" target="_blank">
                                        Inscription
                                        au
                                        CLES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #28A60E">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color:#28A60E;">Campus en ligne
                                <span class="move">+</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: #28A60E">
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
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2" style="border-color: dimgrey">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color: dimgrey">Aide
                                <span class="move">+</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: dimgrey">
                                <div class="grey m-2 square move">
                                    <a class="link-size" href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html">Tutoriels
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #E47A00">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color: #E47A00">Bureau virtuel
                                <span class="move">+</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: #E47A00">
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
                                    <a class="link-size" href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
                                       target="_blank">Listes de diffusion</a>
                                </div>

                                <div class="orange m-2 square move">
                                    <a class="link-size" href="http://esupweb.univ-artois.fr/esup/pages/zoom/" target="_blank">Zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2" style="border-color: blueviolet">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color: blueviolet">Intranet
                                <span class="move">+</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: blueviolet">
                                <div class="purple ge m-2 square move">
                                    <a class="link-size" href="http://intranet.univ-artois.fr/etudiant"
                                       target="_blank">Intranet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #0087A7">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center" style="color: #0087A7">Documentation
                                <span class="move">+</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-4 child-container" style="border-color: #0087A7">
                                <div class="blue m-2 square move">
                                    <a class="link-size" href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
                                       target="_blank">Encyclopaedia Universalis</a>
                                </div>

                                <div class="blue m-2 square move">
                                    <a class="link-size" href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
                                       target="_blank">Bibliothèques</a>
                                </div>

                                <div class="blue m-2 square move">
                                    <a class="link-size" href="http://univ-numerique.fr/"
                                       target="_blank">UNT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <button class="btn btn-primary" id="save">Save</button>

    </body>
</x-app-layout>

</html>

<script>
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
        start: function (e, ui) {
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

    /*var savedOrd = $.cookie('sortOrder');
    if (savedOrd) {
        $.each(savedOrd.split(','), function (i, e) {
            $('#' + e).insertAfter('#sortableDocumentation>div:eq(' + i + ')');
        });
    }

    $('#save').click(function () {
        var saveOrd = $('#sortableDocumentation').sortable('toArray');
        $.cookie('sortOrder', saveOrd);
    });*/
</script>

<style>
    .red {
        background-color: #D2351F;
        border-radius: 5px;
        text-align: center;
    }

    .green {
        background-color: #28A60E;
        border-radius: 5px;
        text-align: center;
    }

    .orange {
        background-color: #E47A00;
        border-radius: 5px;
        text-align: center;
    }

    .blue {
        background-color: #0087A7;
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
        max-width: 550px;
    }

    .link-size {
        padding: 8px;
    }
</style>
