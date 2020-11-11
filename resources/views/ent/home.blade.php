<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif

    <div id="campus_en_ligne">
        <a id="campus" href="/campus">Campus en ligne</a>
        <br>
        <a id="moodle" href="https://moodle.univ-artois.fr/cours/" target="_blank">Moodle</a>
        <br>
        <a id="maison_des_langues" href="http://www.univ-artois.fr/formations/la-maison-des-langues" target="_blank">Maison des langues</a>
        <br>
        <a id="cles" href="http://www.univ-artois.fr/formations/certifications/cles" target="_blank">CLES</a>
        <br>
        <a id="ressource_pedagogique" href="http://www.sup-numerique.gouv.fr/" target="_blank">Ressources pédagogiques</a>
        <br>
        <a id="covoit_artois" href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte" target="_blank">CoVoit'Artois</a>
        <br>
        <a id="sport" href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank">Inscriptions Activités Sportives</a>
    </div>
    <div id="scolarite">
        <a id="scolarite" href="/scolarite">Scolarite</a>
        <br>
        <a id="dossier" href="#">Mon dossier</a>
        <br>
        <a id="sms" href="#">Alert SMS</a>
        <br>
        <a id="actu" href="#">Actualité & documents</a>
        <br>
        <a id="emploi_univ" href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34" target="_blank">Offres d'emploi de l'université</a>
        <br>
        <a id="career" href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank">Career Center</a>
        <br>
        <a id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil" target="_blank">Contart pédagogique</a>
        <br>
        <a id="convention" href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC" target="_blank">Convention de stage</a>
        <br>
        <a id="transferts" href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr" target="_blank">Transferts-departs</a>
        <br>
        <a id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic" target="_blank">Inscription au TOEIC</a>
        <br>
        <a id="ia_web" href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription" target="_blank">IA Web</a>
        <br>
        <a id="ip_web" href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank">IP Web</a>
        <br>
        <a id="inscription_cles" href="http://www.univ-artois.fr/inscription-au-cles" target="_blank">Inscription au CLES</a>
    </div>
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
        <a id="liste" href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr" target="_blank">Listes de diffusion</a>
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
        <a id="encyclopedie" href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr" target="_blank">Encyclopaedia Universalis</a>
        <br>
        <a id="bibliotheque" href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml" target="_blank">Bibliothéques</a>
        <br>
        <a id="unt" href="http://univ-numerique.fr/" target="_blank">UNT</a>
    </div>

</div>
</body>
</html>