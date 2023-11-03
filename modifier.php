<?php
require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dmodifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="container">
<form name="foemUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
<h2 align="center">mettre a jour une voiture...</h2>
<label ><b>immatriculation :</b></label>
<input type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['mod']; ?>" readonly>
<label><b>Marque</b></label>
<input type="text" class="zonetext" name="txtMarque" placeholder="entre le marque ici..." required>

<label><b>prix de location</b></label>
<input type="number" class="zonetext" name="txtpl" placeholder="entre le prix unitaire..." required>


<label><b>Photo</b></label>
<input type="file"  name="txtphoto" placeholder="choisi une image" required>

<input type="submit" class="submit" name="btmod" value="Mettre a jour" >

<p <a href="accueil.php" class="submit">Tableau de bord</a></p>
<label style="text-align: center; color: #360001; ">
    <?php 
    if(isset($_POST['btmod'])){
        $imm=$_POST['txtImm'];
        $marque=$_POST['txtMarque'];
        $prixloc=$_POST['txtpl'];

        $modifier=$_GET['mod'];


       $image=$_FILES['txtphoto']['tmp_name'];

       $straget="image/".$_FILES['txtphoto']['name'];
       move_uploaded_file($image,$straget);
       $reqUp="UPDATE automobille SET MARQUE='$marque',PRIX_LOC='$prixloc',HPOTO='$straget' WHERE IMM='$modifier'";
   
       $resultat =mysqli_query($cnloccar,$reqUp);
       if ($resultat){
            echo "mise a jour des donnees valides ";

       }else{

            echo "echec de modification de donnees";

       }
   
   
    }
    
    ?>



</label>
</form>

</div>


</body>
</html>