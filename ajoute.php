<?php
    require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container" >
    <form  name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">

    <h2 align="center">Ajouter une nouvelle voiture..</h2>
    <label><b>Immaticulation :</b></label>
    <input type="text" name="txtImm" class="zonetext" placeholder="Entre l'immatriculation" required>

    <label><b>Marque :</b></label>
    <input type="text" name="txtMarque" class="zonetext" placeholder="Entre la marque" required>
    <label><b>Prix de location :</b></label>
    <input type="number" name="txtPl" class="zonetext" placeholder="Entre le prix unitaire" required>
    <label><b>Photo :</b></label>
    <input type ="file" name="txtPhoto" class="zonetext" placeholder="choisir une image" required>
    <input type ="submit" name="btadd" value="Ajouter" class="submit">
    <p><a href="accueil.php" class="submit">Tableau de bord</a></p>
    <label style="text-align: center; color:#968486;">

       
   </label>
    </form>

    </div>
    
</body>
</html>

<?php 
           if(isset($_POST['btadd'])){

            $imm=$_POST['txtImm'];
            $marque=$_POST['txtMarque'];
            $prixLoc=$_POST['txtPl'];
            $image=$_FILES['txtPhoto']['tmp_name'];
            $traget="image/".$_FILES['txtPhoto']['name'];
            move_uploaded_file($image,$traget);

            $reqAdd="INSERT INTO automobille(IMM, MARQUE,PRIX_LOC;PHOTO)
             VALUES ('$imm','$marque','$prixLoc','$traget')";
             $resultat=mysqli_query($cnloccar,$reqAdd);
              if($resultat)
              {
                    echo "Insertion des donnees valides";
              }else{
                    echo "Echec d'insertion des donnees ";
              }

        

           }
        ?>