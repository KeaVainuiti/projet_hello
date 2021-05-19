<?php
//connexion au serveur de base de données
require('connexion_bdd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin-Hello</title>

    <!-- BOOTSTRAP -->
    
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
    
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/util.js"></script>

</head>

<body>
    
    <?php

     If (isset($_POST['btn'])) {

        // si bouton == supprimer
        if ($_POST['btn'] == "Supprimer") {
            $etat = "fermer";

            // je récupère mon formulaire supprimer
            $id = $_POST['id_langue'];

            // j"execute ma requête supprimer
            // dans ma fonction deleteDbShoop
            $langue->deletelangue($id);
        }

        if ($_POST['btn'] == "Modifier") {
            $etat = "ouvrir";
            $id_clique = $_POST['id_langue'];
        }

        if ($_POST['btn'] == "Confirmer") {
            $etat = "fermer";
            $new_name = $_POST['new_name'];
            $new_translate = $_POST['new_translate'];
            $id_livre = $_POST['id_livre'];

            $langue->updatelangue($new_nom, $new_prix, $id_livre);
        }


        if ($_POST['btn'] == "Valider") {

            $etat = "fermer";

            // récupérer les valeurs 
            $name = $_POST['name']; //Variable $nom contient les données de l'input 'nom'

            $translate = $_POST['translate']; //Variable $nom contient les données de l'input 'prix'

            $langue->createlangue($name, $langue);
        }
    } else {

    $etat = "fermer";
}
    ?>

</body>
</html>
