<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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

    <script>
        $( function() {
            $( "a" ).draggable();
        } );

    </script>

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

    <body>
    <div id="box"></div>
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Scolarité
        </h2>

        <div class="container">
            <div class="row">
                <a id="dossier" href="#" class="red column-space col-sm">
                    Mon dossier
                </a>

                <a id="sms" href="#" class="red column-space col-sm">
                    Alert SMS
                </a>

                <a id="actu" href="#" class="red column-space col-sm">
                    Actualité & documents
                </a>
            </div>

            <div class="row">
                <a id="emploi_univ" href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                   target="_blank" class="red column-space col-sm">
                    Offres
                    d'emploi de l'université
                </a>
                <a id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank"
                   class="red column-space col-sm">
                    Career
                    Center
                </a>
                <a id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil" target="_blank"
                   class="red column-space col-sm">
                    Contrat
                    pédagogique
                </a>
            </div>


            <div class="row">
                <a id="convention"
                   href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                   target="_blank" class="red column-space col-sm">
                    Convention de stage
                </a>

                <a id="transferts"
                   href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                   target="_blank" class="red column-space col-sm">
                    Transferts-departs
                </a>

                <a id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic" target="_blank"
                   class="red column-space col-sm">
                    Inscription au
                    TOEIC
                </a>
            </div>

            <div class="row">
                <a id="ia_web"
                   href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                   target="_blank" class="red column-space col-sm">
                    IA Web
                </a>

                <a id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank"
                   class="red column-space col-sm">
                    IP Web
                </a>

                <a id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles" target="_blank"
                   class="red column-space col-sm">
                    Inscription
                    au
                    CLES
                </a>
            </div>
        </div>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Campus en ligne
        </h2>

        <!-- Importation du component Counter
        <livewire:counter/>
        -->

        <div class="container">
            <div class="row">
                <a id="moodle" class="green column-space col-sm" href="https://moodle.univ-artois.fr/cours/"
                   target="_blank">
                    Moodle
                </a>

                <a id="maison_des_langues" class="green column-space col-sm"
                   href="http://www.univ-artois.fr/formations/la-maison-des-langues"
                   target="_blank">Maison
                    des langues</a>

                <a id="cles" class="green column-space col-sm"
                   href="http://www.univ-artois.fr/formations/certifications/cles"
                   target="_blank">CLES</a>
            </div>

            <div class="row">
                <a id="ressource_pedagogique" class="green column-space col-sm"
                   href="http://www.sup-numerique.gouv.fr/" target="_blank">Ressources
                    pédagogiques</a>

                <a id="covoit_artois" class="green column-space col-sm"
                   href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte"
                   target="_blank">CoVoit'Artois</a>

                <a id="sport" class="green column-space col-sm"
                   href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank">Inscriptions
                    Activités Sportives</a>
            </div>
        </div>


        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Aide
        </h2>

        <div class="container">
            <div class="row">
                <a id="tuto" class="grey column-space col-sm"
                   href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html">Tutoriels</a>
            </div>
        </div>


        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Bureau virtuel
        </h2>

        <div class="container">
            <div class="row">
                <a id="webmail" class="orange column-space col-sm" href="https://wmailetu.univ-artois.fr/"
                   target="_blank">Mon webmail</a>

                <a id="annuaire" class="orange column-space col-sm" href="#">Annuaire</a>

                <a id="mdp" class="orange column-space col-sm" href="https://monmotdepasse.univ-artois.fr/"
                   target="_blank">Changement de mot de
                    passe</a>
            </div>
            <div class="row">
                <a id="liste" class="orange column-space col-sm"
                   href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
                   target="_blank">Listes de diffusion</a>

                <a id="zoom" class="orange column-space col-sm"
                   href="http://esupweb.univ-artois.fr/esup/pages/zoom/" target="_blank">Zoom</a>
            </div>
        </div>


        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Intranet
        </h2>

        <div class="container">
            <div class="row">
                <a id="net" class="purple column-space col-sm" href="http://intranet.univ-artois.fr/etudiant"
                   target="_blank">Intranet</a>
            </div>
        </div>


        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Documentation
        </h2>

        <div class="container">
            <div class="row">
                <a id="encyclopedie" class="blue column-space col-sm"
                   href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
                   target="_blank">Encyclopaedia Universalis</a>

                <a id="bibliotheque" class="blue column-space col-sm"
                   href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
                   target="_blank">Bibliothèques</a>

                <a id="unt" class="blue column-space col-sm" href="http://univ-numerique.fr/"
                   target="_blank">UNT</a>
            </div>
        </div>
    </div>
    @livewireScripts
    </body>
</x-app-layout>

</html>

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
    #box{
        width: 150px;
        height: 150px;
        background-color: #a0aec0;
        border: 5px solid #1a202c ;
    }
</style>
