<?php
require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location car...</title>
    <style>
    .myphoto{
        width: 50px;height: 50x;border-radius: 50% ;border: 1px solid;
    }
    
    
    
    </style>
    
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="globl">

    <div id="profil">

    <?php
    session_start();
   echo "Bonjour et bienvenue".$_SESSION['monLogin']."<br>";
    $req="SELECT * FROM  utilisateur WHERE  login='".$_SESSION['monLogin']."'";
    $resultat=mysqli_query($cnloccar,$req);

    $ligne=mysqli_fetch_assoc($resultat);

    
    ?>
    <div>
    <img src="<?php echo $ligne['my photo']; ?>" class="myphoto" >
    <br>
    <a href="index.php">deconnection</a>

    </div><br>

    <div id="tableaubord">
        
        <?php
        include("tablleaubord.php");
        ?>
    </div>

    </div>
</body>
</html>