<?php
  require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <p><h1><b> liste des voiture...</b></h1>
    <?php
    $reqselect="select * from automobille";
    $resultat=mysqli_query($cnloccar,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p>Total".$nbr."</b> voitures...</p>";

    ?>
    </p>
    <p><a href="ajoute.php"><img src="image/ajouter.png" width="50px" height="50px" ></a></p>
    <table width="100%" border="1" >
        <tr>
            <th>Immatriculation</th>
            <th>Marque</th>
            <th>prix de location</th>
            <th>photo</th>
            <th>supprimer</th>
            <th>modifier</th>

        </tr>
        <?php
         while($ligne=mysqli_fetch_assoc($resultat)){

            ?>
            <tr>
                <td> <?php echo $ligne['IMM']; ?></td>
                <td> <?php echo $ligne['MARQUE']; ?></td>
                <td> <?php echo $ligne['PRIX_LOC']; ?></td>
                <td><img class="photocar" src= '<?php echo $ligne['PHOTO']; ?>' ></td>
                <td><a href="supprimer.php?supCar=<?php echo $ligne['IMM']; ?>"><img src="image/supprimer.png" width="50px" height="50px" ></a></td>
                <td><a href="modifier.php?mod=<?php echo $ligne['IMM'];?>"><img src="image/modifier.png" width="50px" height="50px" ></a></td>
            </tr>
            <?php
         }
         
        ?>
    </table>
</body>
</html>