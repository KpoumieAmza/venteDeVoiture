<?php 
    require_once('connexion.php');
   /* require_once('index.php');*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="container">
     <form name="formdelet" class=" formulaire">
        <p><a href="accueil.php" class="submit">Tableau de bord</a></p>

    

 
      <?php

        if(isset($_GET['supCar'])){
            $supCar=$_GET['supCar'];
            $reqDelete="DELETE FROM automobille WHERE IMM='$supCar'";
           $resultat=mysqli_query($cnloccar,$reqDelete);

        }
        if ($resultat){
            echo " <label style='text-align: center; color: #968486;'>
            la suppression a ete correctement effectue...</label>";
        }else{
            echo " <label style='text-align: center; color:#968486;'>
            la suppression a echouee...</label>";
        }

       ?>
     </form>
   </div>  
</body>
</html>