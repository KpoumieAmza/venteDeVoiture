<?Php require_once('connexion.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="container"> 
        <form action="" method="post" class="formulaire">
            <h1>connexion</h1>
            <label><b>Nom d'utilisateur :</b></label>
            <input type="text" placeholder="entre l'utilisateur"
            name="txtlogin" required class="zonetext"><br />

            <label><b>Mot de passe :</b></label>
            <input type="password" placeholder="entre le mot de passe"
            name="txtpw" required class="zonetext">
            <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">

            <?PhP
             if(isset($_POST['btlogin'])){

                $req="SELECT * FROM utilisateur WHERE Login='".$_POST['txtlogin']."'
                and mot de passe='".$_POST['txtpw']."'";
                if($resultat=mysqli_query($cnloccar, $req))
                {
                    $ligne=mysqli_fetch_assoc($resultat);
                    if($ligne!=0){
                        session_start();
                        $_SESSION['monLogin']=$_POST['txtlogin'];
                        header("location:accueil.php");
                    }
                    else{
                        echo "<font color='#f0001D'>login ou mot de passe est invalide </font>";
                    }
                }
             }



            ?>

        </form>
    </div>

</body>
</html>