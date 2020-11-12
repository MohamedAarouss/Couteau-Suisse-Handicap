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

    <div id="bureau_virtuel">
        <a id="retour" href="/home">Retour au tableau de bord</a>
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
</div>
</body>
</html>
