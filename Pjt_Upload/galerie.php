<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/galerie.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <title>Envoi d'images</title>
</head>

<body>

    <h1>Galerie d'images envoyées sur le serveur</h1>

    <div class="frame">
        <a href="index.php">Retour à l'accueil</a>

        <div class="cont">

            <?php

            // Récupération des fichiers se terminant par les extensions nommées
            $images = glob("uploads/*{jpg,png,gif,jpeg}", GLOB_BRACE);

            if (empty($images)) {
                echo "<p> Il n'y a pas encore d'images dans la galerie</p>";
            } else

            // Boucle pour afficher les images
                foreach ($images as $image) : ?>

                <img src="<?= $image ?>" alt="jolie image" class="image">


            <?php endforeach; ?>
        </div>

        <a href="index.php">Retour à l'accueil</a>
    </div>

</body>

</html>