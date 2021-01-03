<x-app-layout>
    <body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENT') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row sortable mt-3">
            @if(auth()->user()->handicap === "daltonien")
                <div class="col-12">
                    <div class="card mt-2" style="border-color: #1E90FF">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center move" style="color: #1E90FF">Scolarité
                                <span><i class="fas fa-arrows-alt"></i></span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-1 child-container" style="border-color: #1E90FF;">
                                <div class="text-center red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size luciole" id="dossier" href="#" style="color:#FFFFFF">
                                        Mon dossier
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="sms" href="#" style="color:#FFFFFF">
                                        Alert SMS
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="actu" href="#" style="color:#FFFFFF">
                                        Actualité & documents
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="emploi_univ"
                                       href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                                       target="_blank" style="color:#FFFFFF">
                                        Offres
                                        d'emploi de l'université
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="career"
                                       href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank" style="color:#FFFFFF">
                                        Career Center
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil"
                                       target="_blank" style="color:#FFFFFF">
                                        Contrat pédagogique
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="convention"
                                       href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                                       target="_blank" style="color:#FFFFFF">
                                        Convention de stage
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="transferts"
                                       href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                                       target="_blank" style="color:#FFFFFF">
                                        Transferts-departs
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic"
                                       target="_blank" style="color:#FFFFFF">
                                        Inscription au
                                        TOEIC
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="ia_web"
                                       href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                                       target="_blank" style="color:#FFFFFF">
                                        IA Web
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="ip_web"
                                       href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank" style="color:#FFFFFF">
                                        IP Web
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #1E90FF">
                                    <a class="link-size" id="inscription_cles"
                                       href="http://www.univ-artois.fr/inscription-au-cles" target="_blank" style="color:#FFFFFF">
                                        Inscription
                                        au
                                        CLES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12">
                    <div class="card mt-2" style="border-color: #D2351F">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center move" style="color: #D2351F">Scolarité
                                <span><i class="fas fa-arrows-alt"></i></span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-1 child-container" style="border-color: #D2351F;">
                                <div class="text-center red m-2 square move">
                                    <a class="link-size" id="dossier" href="#" style="color:#FFFFFF">
                                        Mon dossier
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="sms" href="#" style="color:#FFFFFF">
                                        Alert SMS
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="actu" href="#" style="color:#FFFFFF">
                                        Actualité & documents
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="emploi_univ"
                                       href="https://ent.univ-artois.fr/esup-news/feeds/pub/item?c=1&itemID=34"
                                       target="_blank" style="color:#FFFFFF">
                                        Offres
                                        d'emploi de l'université
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="career"
                                       href="https://univ-artois.jobteaser.com/fr/users/sso_activation" target="_blank" style="color:#FFFFFF">
                                        Career
                                        Center
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="contrat" href="http://conpere.univ-artois.fr/etudiants/accueil"
                                       target="_blank" style="color:#FFFFFF">
                                        Contrat pédagogique
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="convention"
                                       href="http://pstagev2.univ-artois.fr/esup-pstage/stylesheets/stage/welcome.xhtml;jsessionid=4ACEDAF24617B6ADFCC0D11E2D67D7EC"
                                       target="_blank" style="color:#FFFFFF">
                                        Convention de stage
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="transferts"
                                       href="https://esup-transferts.univ-artois.fr/esup-transferts/stylesheets/depart/welcome.xhtml?ticket=ST-5592-9gScmVLfJSOsJsrAOK91-auth.univ-artois.fr"
                                       target="_blank" style="color:#FFFFFF">
                                        Transferts-departs
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="toeic" href="http://www.univ-artois.fr/inscription-au-toeic"
                                       target="_blank" style="color:#FFFFFF">
                                        Inscription au
                                        TOEIC
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="ia_web"
                                       href="http://www.univ-artois.fr/formations/admission-inscription-transfert/reinscription"
                                       target="_blank" style="color:#FFFFFF">
                                        IA Web
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="ip_web"
                                       href="http://www.univ-artois.fr/inscription-pedagogique" target="_blank" style="color:#FFFFFF">
                                        IP Web
                                    </a>
                                </div>

                                <div class="red m-2 square move">
                                    <a class="link-size" id="inscription_cles"
                                       href="http://www.univ-artois.fr/inscription-au-cles" target="_blank" style="color:#FFFFFF">
                                        Inscription
                                        au
                                        CLES
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-6">
                <div class="card mt-2" style="border-color: #28A60E">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color:#28A60E;">Campus en ligne
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #28A60E">
                            <div class="green m-2 square move">
                                <a class="link-size" id="moodle" href="https://moodle.univ-artois.fr/cours/"
                                   target="_blank" style="color:#FFFFFF">
                                    Moodle
                                </a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="maison_des_langues"
                                   href="http://www.univ-artois.fr/formations/la-maison-des-langues"
                                   target="_blank" style="color:#FFFFFF">
                                    Maison des langues</a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="cles"
                                   href="http://www.univ-artois.fr/formations/certifications/cles"
                                   target="_blank" style="color:#FFFFFF">
                                    CLES
                                </a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="ressource_pedagogique"
                                   href="http://www.sup-numerique.gouv.fr/" target="_blank" style="color:#FFFFFF">
                                    Ressources pédagogiques
                                </a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="covoit_artois"
                                   href="http://covoiturage.univ-artois.fr/covoiturage/mon-compte"
                                   target="_blank" style="color:#FFFFFF">
                                    CoVoit'Artois
                                </a>
                            </div>

                            <div class="green m-2 square move">
                                <a class="link-size" id="sport"
                                   href="https://atlas.univ-artois.fr/atlas_etu/mes_inscriptions.php" target="_blank" style="color:#FFFFFF">
                                    Inscriptions Activités Sportives
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: #E47A00">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color: #E47A00">Bureau virtuel
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #E47A00">
                            <div class="orange m-2 square move">
                                <a class="link-size" href="https://wmailetu.univ-artois.fr/"
                                   target="_blank" style="color:#FFFFFF">Mon webmail</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="#" style="color:#FFFFFF">Annuaire</a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="https://monmotdepasse.univ-artois.fr/"
                                   target="_blank" style="color:#FFFFFF">
                                    Changement de mot de passe
                                </a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size"
                                   href="http://weblistes.univ-artois.fr/sympa/?ticket=ST-5314-fyHW7YtHOI0cVkVw6txr-auth.univ-artois.fr"
                                   target="_blank" style="color:#FFFFFF">
                                    Listes de diffusion
                                </a>
                            </div>

                            <div class="orange m-2 square move">
                                <a class="link-size" href="http://esupweb.univ-artois.fr/esup/pages/zoom/"
                                   target="_blank" style="color:#FFFFFF">
                                    Zoom
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: dimgrey">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move"  style="color: dimgrey">Aide
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: dimgrey">
                            <div class="grey m-2 square move">
                                <a class="link-size"
                                   href="http://esupweb.univ-artois.fr/esup/tutos/etudiant/co/00a_guideWeb.html" style="color:#FFFFFF">
                                    Tutoriels
                                </a>
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
                            <div class="purple ge m-2 square move">
                                <a class="link-size" href="http://intranet.univ-artois.fr/etudiant"
                                   target="_blank" style="color:#FFFFFF">
                                    Intranet
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mt-2" style="border-color: #0087A7">
                    <div class="card-header">
                        <h1 class="card-title font-semibold text-xl text-center move" style="color: #0087A7">Documentation
                            <span class="move"><i class="fas fa-arrows-alt"></i></span>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row m-1 child-container" style="border-color: #0087A7">
                            <div class="blue m-2 square move">
                                <a class="link-size"
                                   href="http://www.universalis-edu.com/?sso_id=24&ticket=ST-4849-YFtj0HYKjJmlf7OEDvGX-auth.univ-artois.fr"
                                   target="_blank" style="color:#FFFFFF">
                                    Encyclopaedia Universalis
                                </a>
                            </div>

                            <div class="blue m-2 square move">
                                <a class="link-size"
                                   href="http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&SSO_FORCELOGON=TRUE&PORTAL_ID=general_portal.xml"
                                   target="_blank" style="color:#FFFFFF">
                                    Bibliothèques
                                </a>
                            </div>

                            <div class="blue m-2 square move">
                                <a class="link-size" href="http://univ-numerique.fr/"
                                   target="_blank" style="color:#FFFFFF">
                                    UNT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(auth()->user()->handicap !== "non")
                <div class="col-6">
                    <div class="card mt-2" style="border-color: #FD6C9E">
                        <div class="card-header">
                            <h1 class="card-title font-semibold text-xl text-center move" style="color: #FD6C9E">Mon handicap
                                <span><i class="fas fa-arrows-alt"></i></span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row m-1 child-container" style="border-color: #FD6C9E;">
                                <div class="text-center red m-2 square move" style="background-color: #FD6C9E">
                                    <a class="link-size" id="sms" href="http://www.univ-artois.fr/vie-etudiante/etudes-et-handicap" style="color:#FFFFFF">
                                        Aide mission handicap
                                    </a>
                                </div>

                                <div class="red m-2 square move" style="background-color: #FD6C9E">
                                    <a class="link-size" id="dossier" href="#" style="color:#FFFFFF">
                                        PAEH
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <button class="btn btn-primary" id="btnSave">Save</button>
        <button class="btn btn-primary" id="btnClear">ClearSave</button>
    </div>

    <button class="btn btn-primary" id="save">Save</button>

    </body>
    @include('footer')
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
