<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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

    <div id="scolarite">
        <a id="retour" href="/home">Retour au tableau de bord</a>
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
</div>
</body>
</html>
