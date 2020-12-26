<x-app-layout>
    <body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENT') }}
        </h2>
    </x-slot>

    <div id="container">
        <div class="row parent-container mt-3">
            @if(auth()->user()->handicap=="oui")
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #D2351F">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center move" style="color: #D2351F">Mon
                                handicap
                                <span><i class="fas fa-arrows-alt"></i></span>
                            </h1>
                        </div>

                        <div class="card-body">
                            <div class="row m-1 child-container" style="border-color: #D2351F;">
                                <div class="text-center red m-2 square move">
                                    <a class="link-size" id="sms"
                                       href="{{ $infos[1]->link }}">
                                        {{ $infos[1]->title }}
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="dossier" href="{{ $infos[1]->link }}">
                                        {{ $infos[1]->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-6">
                <div class="card mt-2" style="border-color: #D2351F">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color: #D2351F">Scolarité
                            <span><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #D2351F;">
                            <div class="text-center red m-2 square move">
                                <a class="link-size" id="dossier" href="{{ $infos[1]->link }}">
                                    {{ $infos[1]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="sms" href="{{ $infos[1]->link }}">
                                    {{ $infos[1]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="actu" href="{{ $infos[2]->link }}">
                                    {{ $infos[2]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="emploi_univ"
                                   href="{{ $infos[3]->link }}"
                                   target="_blank">
                                    {{ $infos[3]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="career"
                                   href="{{ $infos[4]->link }}" target="_blank">
                                    {{ $infos[4]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="contrat" href="{{ $infos[5]->link }}"
                                   target="_blank">
                                    {{ $infos[5]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="convention"
                                   href="{{ $infos[6]->link }}"
                                   target="_blank">
                                    {{ $infos[6]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="transferts"
                                   href="{{ $infos[7]->link }}"
                                   target="_blank">
                                    {{ $infos[7]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="toeic" href="{{ $infos[8]->link }}"
                                   target="_blank">
                                    {{ $infos[8]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="ia_web"
                                   href="{{ $infos[9]->link }}"
                                   target="_blank">
                                    {{ $infos[9]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="ip_web"
                                   href="{{ $infos[10]->link }}" target="_blank">
                                    {{ $infos[10]->title }}
                                </a>
                            </div>

                            <div class="red m-2 square move">
                                <a class="link-size" id="inscription_cles"
                                   href="{{ $infos[11]->link }}" target="_blank">
                                    {{ $infos[11]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: #28A60E">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move"
                            style="color:#28A60E;"> Campus en ligne
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #28A60E">
                            <div class="green m-2 square move">
                                <a class="link-size" id="moodle" href="{{ $infos[12]->link }}"
                                   target="_blank">
                                    {{ $infos[12]->title }}
                                </a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="maison_des_langues"
                                   href="{{ $infos[13]->link }}"
                                   target="_blank"> {{ $infos[13]->title }}</a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="cles"
                                   href="{{ $infos[14]->link }}"
                                   target="_blank"> {{ $infos[14]->title }}</a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="ressource_pedagogique"
                                   href="{{ $infos[15]->link }}" target="_blank">
                                    {{ $infos[15]->title }}</a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="covoit_artois"
                                   href="{{ $infos[16]->link }}"
                                   target="_blank"> {{ $infos[16]->title }}</a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="sport"
                                   href="{{ $infos[17]->link }}"
                                   target="_blank"> {{ $infos[17]->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: dimgrey">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move"
                            style="color: dimgrey"> Aide
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: dimgrey">
                            <div class="grey m-2 square move">
                                <a class="link-size"
                                   href="{{ $infos[18]->link }}">
                                    {{ $infos[18]->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: #E47A00">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move"
                            style="color: #E47A00"> Bureau virtuel
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #E47A00">
                            <div class="orange m-2 square move">
                                <a class="link-size" href="{{ $infos[19]->link }}"
                                   target="_blank"> {{ $infos[19]->title }}</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="{{ $infos[20]->link }}">
                                    {{ $infos[20]->title }}</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="{{ $infos[21]->link }}"
                                   target="_blank"> {{ $infos[21]->title }}</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size"
                                   href="{{ $infos[22]->link }}"
                                   target="_blank"> {{ $infos[22]->title }}</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="{{ $infos[23]->link }}"
                                   target="_blank"> {{ $infos[23]->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: blueviolet">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color: blueviolet">Intranet
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: blueviolet">
                            <div class="purple m-2 square move">
                                <a class="link-size" href="{{ $infos[24]->link }}"
                                   target="_blank"> {{ $infos[24]->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: #0087A7">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color: #0087A7">
                            Documentation
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #0087A7">
                            <div class="blue m-2 square move">
                                <a class="link-size"
                                   href="{{ $infos[25]->link }}"
                                   target="_blank"> {{ $infos[25]->title }}</a>
                            </div>

                            <div class="blue m-2 square move">
                                <a class="link-size"
                                   href="{{ $infos[26]->link }}"
                                   target="_blank"> {{ $infos[26]->title }}</a>
                            </div>

                            <div class="blue m-2 square move">
                                <a class="link-size" href="{{ $infos[27]->link }}"
                                   target="_blank"> {{ $infos[27]->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    @include('footer')
</x-app-layout>

</html>

<script>
    $(".parent-container").sortable({
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
        },
    });

    // Sort the children
    $(".child-container").sortable({
        items: "> div",
        tolerance: "pointer",
        containment: "document",
        connectWith: '.child-container',
    });

</script>

<style>
    footer {
        background: #16222A;
        background: linear-gradient(59deg, #0087A7, #024772);
        color: white;
        margin-top: 100px;
    }

    footer a {
        color: #fff;
        font-size: 14px;
        transition-duration: 0.2s;
    }

    footer a:hover {
        color: #FA944B;
        text-decoration: none;
    }

    .copy {
        font-size: 12px;
        padding: 10px;
        border-top: 1px solid #FFFFFF;
    }

    .footer-middle {
        padding-top: 2em;
        color: white;
    }

    .red {
        background-color: #D2351F;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .green {
        background-color: #28A60E;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .orange {
        background-color: #E47A00;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .blue {
        background-color: #0087A7;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .purple {
        background-color: rebeccapurple;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .grey {
        background-color: gray;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    .column-space {
        margin: 4px;
    }

    a:link {
        text-decoration: none;
        color: white;
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
        min-width: min-content;
        max-width: max-content;
    }

    .link-size {
        padding: 8px;
    }
</style>
