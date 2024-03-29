<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Je suis Clément Markey, Développeur Web. Et voici mon Portfolio" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web|Oswald&display=swap" rel="stylesheet">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Clément Markey</title>
</head>

<body>

    <main>
        <div class="top-img"></div>

        <section class="container row top">


            <h1 class="col s12 offset-m2 m3">Bonjour<br>à tous</h1>

            <p class="container col m6 s12">
                Je suis Clément Markey, Développeur Web.<br> Passionné par la technologie et les sciences, je suis actuellement apprenant chez Simplon.co afin de parfaire mes connaissances et valoriser mon expérience en développement web dans le but de décrocher le Titre Professionnel: "Développeur Web et Web Mobile" et vivre d'un métier qui me captive.
            </p>
        </section>

        <section class="about row">
            <h2 class="center">À propos</h2>

            <div class="row container">
                <p class="col">
                    C'est en me rendant compte que j'avais beaucoup plus d'intérêt et de plaisir à apprendre à coder que de suivre mes cours de Gestion des Ressources Humaines en Irlande que j'ai compris qu'il fallait que je prenne mon avenir en main et que je me suis dirigé vers une pré-formation intensive de trois mois chez <a href="http://oclock.io" target="_blank" rel="noreferrer">O'clock</a> et m'embarquer dans le début du reste de ma vie ! J'y ai appris les bases du développement web avec HTML/CSS, PHP et JavaScript, mais surtout j'y ai découvert une réelle passion.<br> Ce trimestre passé, je me suis donc orienté vers <a href="http://simplon.co" target="_blank" rel="noreferrer">Simplon</a>, où j'ai pu développer mes compétences précédemment acquises et découvrir le travail en mode projet, en utilisant les méthodes agiles. <br>
                    Ayant réussi à faire de ma passion des compétences répondant à un réel besoin, je suis désormais à la recherche d'un CDI en tant que développeur back-end sur le secteur de Lille. <br>
                    N'hésitez pas à me contacter via le formulaire <a href="#form">en bas de page</a> si mon profil vous intéresse.
                </p>
            </div>

        </section>

        <section class="folio row">
            <h2 class="center">Portfolio</h2>

            <div class="row container">
                <div class="col folio-grid" data-aos="fade-right">
                    <div class="col s12 sombre m5">
                        <div class="opa">
                            <a href="HeyU/index.html" target="_blank"><img class="imaj" src="./img/HeyU.png" alt="Intégration HeyU"></a>
                        </div>
                    </div>
                    <p class="col s12 offset-m1 m5">
                        Exercice pratique d'intégration à partir d'une maquette dans le cadre de ma formation, avec utilisation de Materialize CSS et utilisation de la librairie AOS JavaScript.
                    </p>
                </div>

                <div class="col m12 folio-grid" data-aos="fade-left">
                    <div class="col s12 right m5 sombre">
                        <div class="opa">
                            <a href="http://preprod.bangcommunication.fr" target="_blank" rel="noreferrer"><img class="imaj" src="./img/Bang.png" alt="Site vitrine Bang Communication"></a>
                        </div>
                    </div>
                    <p class="col s12 m5">
                        Intégration complète du site vitrine d'une agence de communication. Site multipage sous WordPress réalisé en trois semaines lors d'un stage.
                    </p>
                </div>

                <div class="col m12 folio-grid " data-aos="fade-right">
                    <div class="col s12 sombre m5">
                        <div class="opa">
                            <a href="Pjt_Upload/" target="_blank"><img class="imaj" src="./img/upload.png" alt="Projet envoi d'images"></a>
                        </div>
                    </div>
                    <p class="col s12 offset-m2 m5">
                        Petit projet personnel consistant en un formulaire d'envoi d'images et d'une galerie les affichant.
                    </p>
                </div>

            </div>

        </section>


        <section class="contact container">
            <h2 class="center">Contact</h2>

            <div class="row" data-aos="flip-right" data-aos-anchor-placement="bottom-bottom">

                <form action="index.php" class="col s12" id="form">
                    <div class="input-field col s12 offset-m1 m5">
                        <input class="validate" type="text" name="name" id="name">
                        <label for="name">Votre nom</label>
                    </div>
                    <div class="input-field col s12 m5">
                        <input type="email" id="email" class="validate">
                        <label for="email">Votre adresse email</label>
                    </div>
                    <div class="input-field col s12 offset-m1 m10">
                        <textarea id="textarea" class="materialize-textarea"></textarea>
                        <label for="textarea">Votre message</label>
                    </div>
                    <div class="col m4 offset-m5">
                        <button class="btn waves-effect waves-light btn-large grey darken-1" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>

        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="col offset-m1 m4 center">
                <p class="footer__text">© 2019 Clément Markey All rights reserved</p>
            </div>

            <div class="col s12 m2">
                <div class="mail center">
                    <a class="mail-link" href="mailto:clement.markey.pro@gmail.com">clement.markey.pro@gmail.com</a>
                </div>
            </div>

            <div class="col offset-s3 s6 m3">
                <div class="tel center">
                    <a class="tel-link" href="tel:+33645613055">+33 6 45 61 30 55</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>