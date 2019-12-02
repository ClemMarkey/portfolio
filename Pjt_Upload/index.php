<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <title>Envoi d'images</title>
</head>

<body>

    <?php

    // Fonction permettant de changer le message affiché selon l'heure

    if (date('G') <= 3 || date('G') >= 17) {
        $hi = "Bonsoir";
    } elseif (date('G') <= 10 and date('G') >= 4) {
        $hi = "Good Morning";
    } else {
        $hi = "Bonjour";
    }


    // Se déclenche seulement si un fichier a été transmis 

    if (!empty($_FILES) && $_FILES['image']) {
        $dossier_cible = "uploads/";
        $fichier_cible = $dossier_cible . basename($_FILES['image']['name']);

        // Vérification du type de fichier pour n'accepter que les jpg, gif et png:

        if (substr($_FILES['image']['type'], -4) != 'jpeg' && substr($_FILES['image']['type'], -3) != 'gif' && substr($_FILES['image']['type'], -3) != 'png') {

            // Statut permettant d'afficher le message d'erreur

            $status = "ko";


        // Si tout le fichier est valide, transfert à la destination cible

        } elseif (move_uploaded_file($_FILES['image']['tmp_name'], $fichier_cible)) {

            // Statut permettant d'afficher le message de confirmation

            $status = "ok";
        }
        /*
    echo "<pre>";
    echo $status;
    echo "<br>";
    var_dump($_FILES);
    echo "</pre>";
    */
    }
    ?>

    <h1><?php echo $hi ?>, veuillez sélectionner votre image:</h1>

    <div class="frame">
        <h2>Formulaire d'envoi</h2>


        <form class="formu" action="index.php" method="post" enctype="multipart/form-data">

            <label for="image">Sélectionnez une image à envoyer</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="3500000" />
            <input class="file" type="file" name="image" id="image">

            <?php

            if (isset($status) && $status == 'ok') {
                echo "<span class='ok mess'>Image envoyée</span>";
            } elseif (isset($status) && $status == 'ko') {
                echo "<span class='err mess'>Erreur: veuillez vérifier le format de votre image <br> (jpg, jpeg, png, gif)</span>";
            }

            ?>

            <button class="button" type="submit">Envoyer</button>
        </form>
        <a href="galerie.php">Accéder à la galerie</a>
    </div>

</body>

</html>