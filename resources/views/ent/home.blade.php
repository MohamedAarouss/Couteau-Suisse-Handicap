<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

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
    <div>
        <div id="campus_en_ligne">
            <a id="campus" href="/campus">Campus en ligne</a>

            <!-- Importation du component Counter
            <livewire:counter/>
            -->

            <br>
            <a id="moodle" href="https://moodle.univ-artois.fr/cours/" target="_blank">Moodle</a>
            <br>
            <a id="maison_des_langues" href="http://www.univ-artois.fr/formations/la-maison-des-langues"
               target="_blank">Maison
                des langues</a>
            <br>
            <a id="cles" href="http://www.univ-artois.fr/formations/certifications/cles" target="_blank">CLES</a>
            <br>
            <a id="ressource_pedagogique" href="http://www.sup-numerique.gouv.fr/" target="_blank">Ressources
                pédagogiques</a>
            <br>
            <a id="covoit_artois" href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte" target="_blank">CoVoit'Artois</a>
            <br>
            <a id="sport" href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank">Inscriptions
                Activités Sportives</a>
        </div>
        <a id="scolarite" href="/scolarite">Scolarite</a>
        <br>

        <div class="container">
            <div class="row">
                <a id="dossier" href="#" class="col-md-2 color column-space">
                    Mon dossier
                </a>

                <a id="sms" href="#" class="col-md-2 color column-space">
                    Alert SMS
                </a>

                <a id="actu" href="#" class="col-md-2 color column-space">
                    Actualité & documents
                </a>
            </div>

            <div class="row">
                <a id="emploi_univ" href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                   target="_blank" class="col-md-2 color column-space">
                    Offres
                    d'emploi de l'université
                </a>
                <a id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank"
                   class="col-md-2 color column-space">
                    Career
                    Center
                </a>
                <a id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil" target="_blank"
                   class="col-md-2 color column-space">
                    Contrat
                    pédagogique
                </a>
            </div>


            <div class="row">
                <a id="convention"
                   href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                   target="_blank" class="col-md-2 color column-space">
                    Convention de stage
                </a>

                <a id="transferts"
                   href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                   target="_blank" class="col-md-2 color column-space">
                    Transferts-departs
                </a>

                <a id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic" target="_blank"
                   class="col-md-2 color column-space">
                    Inscription au
                    TOEIC
                </a>
            </div>

            <div class="row">
                <a id="ia_web"
                   href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                   target="_blank" class="col-md-2 color column-space">
                    IA Web
                </a>

                <a id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank"
                   class="col-md-2 color column-space">
                    IP Web
                </a>

                <a id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles" target="_blank"
                   class="col-md-2 color column-space">
                    Inscription
                    au
                    CLES
                </a>
        </div>
    </div>

    <div id="scolarite">

    </div>

    <br>
    <div id="aide">
        <a id="aide" href="/aide">Aide</a>
        <br>
        <a id="tuto" href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html">Tutoriels</a>
    </div>
    <div id="bureau_virtuel">
        <a id="bureau" href="/bureau_virtuel">Bureau virtuel</a>
        <br>
        <a id="webmail" href="https://wmailetu.univ-artois.fr/" target="_blank">Mon webmail</a>
        <br>
        <a id="annuaire" href="#">Annuaire</a>
        <br>
        <a id="mdp" href="https://monmotdepasse.univ-artois.fr/" target="_blank">Changement de mot de passe</a>
        <br>
        <a id="liste"
           href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
           target="_blank">Listes de diffusion</a>
        <br>
        <a id="zoom" href="http://esupweb.univ-artois.fr/esup/pages/zoom/" target="_blank">Zoom</a>


    </div>
    <div id="intranet">
        <a id="intranet" href="/intranet">Intranet</a>
        <br>
        <a id="net" href="http://intranet.univ-artois.fr/etudiant" target="_blank">Intranet</a>
    </div>
    <div id="documentation">
        <a id="docu" href="/documentation">Documentation</a>
        <br>
        <a id="encyclopedie"
           href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
           target="_blank">Encyclopaedia Universalis</a>
        <br>
        <a id="bibliotheque"
           href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
           target="_blank">Bibliothéques</a>
        <br>
        <a id="unt" href="http://univ-numerique.fr/" target="_blank">UNT</a>
    </div>

    </div>
    @livewireScripts
    </body>
</x-app-layout>

</html>

<style>
    .color {
        background-color: #e54a12;
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
</style>
