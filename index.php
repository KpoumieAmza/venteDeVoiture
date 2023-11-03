<?php
require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location car...</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="entete">
        <a href="login.php" class="login">login</a>
        <video class="video_entete" autoplay><source src="image/Top 10 voitures de luxe 2023.mp4" type="video/mp4"></video>
        <p class="nomsite">LUDIVINE</p>
        <div id="formauto">
            <form name="formauto" action="" method="post">
                <input type="text" name="motcle" placeholder="recherche par marque"
                id="motcle">
                <input type="submit" name="btsubmit" value="Recherche" class="btfind">
            </form>
        </div>
    </div>
    <div id="articles">
    <?php
    if(isset($_POST['btsubmit'])){
        $mc=$_POST['motcle'];
        $reqSelect="select * from automobille where MARQUE like '%$mc%' ";
    }
    else{

        $reqSelect="select * from automobille" ;
    }
    $resultat=mysqli_query($cnloccar,$reqSelect );
    $nbr=mysqli_num_rows($resultat);
    echo"<p><b>" .$nbr. " </b>Resultat de votre recherche...</P>";
     while($ligne=mysqli_fetch_assoc($resultat)){
    ?>
    <div id="auto">
        <img src="<?php echo $ligne['PHOTO']; ?>" /><br />
        <?php echo $ligne['IMM'] ; ?><br />
        <?php echo $ligne['MARQUE'] ;?><br />
        <?php echo $ligne['PRIX_LOC'] ; ?>
        
    </div>

<?php } ?>
    </div>
</body>
</html>