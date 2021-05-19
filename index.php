<?php
//connexion au serveur de base de données
require('connexion_bdd.php');

//$name = $_POST['Name'];
//$translate = $_POST['Translate'];
//var_dump($name);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <title>Hello</title>

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

    <label>
        <u>
            <b>
                Choisir la langue:
            </b>
        </u>
    </label>
  
  
  <?php
    //Formulaire
    // <!-- CREER UN LIVRE  -->
    echo '<form  method="POST" action="index.php">';

      echo '<u>';
          echo '<p>';
          echo 'Remplir les champs ci-dessous:';
          echo '</p>';
      echo '</u>';

      echo'<p>';

      $sql = "SELECT * from langue" ; //$sql : contient la requete sql 
      $result = $connect_bdd->query($sql); //$result : execute la requete $sql

      if ($result->num_rows > 0) {
        echo '<select name="selectLangue" >';

        foreach ($result as $k => $v){
          echo"<option value=".$v["translate"].">".$v["name"]."</option>";
        }
        echo '</select>';
      }
      echo '<br>';
      
      echo '<input type="text" name="name" placeholder="Name">';
      
      echo '<input type="submit" name="btnValider" value="Valider">';
    
      echo '<p>';
        if (isset($_POST['btnValider'])) {
          $name = $_POST['name'];
          $translate = $_POST['selectLangue'];

          echo "<textarea>";
          echo $translate." ";
          echo $name;
          echo "</textarea>";
        }
      echo '</p>';
  

    echo '</form>';
  
  ?>

</body>
</html>