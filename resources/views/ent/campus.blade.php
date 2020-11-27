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

    <div id="campus_en_ligne">
        <a id="retour" href="/ent/home">Retour au tableau de bord</a>
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
</div>
</body>
</html>
