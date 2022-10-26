<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="stylelogin.css" />
       
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    <div id="container">
    <form action="connexion.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required /><br />
        <label for="pass">Mot de passe</label> :  <input type="password" name="pass" id="pass" required/><br />

        <input type="submit" value="Envoyer" />
        <?php
                if(isset($_GET['erreur'])){

                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
        ?>
    </p>
    </form>
    </div>
    </body>
</html>