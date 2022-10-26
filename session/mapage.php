<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>

    <h1>
         Re-bonjour
    </h1>
       
    <p>
        je me sovies de toi ton prénom est
         <?php echo  $_SESSION['prenom']; ?> !<br />
    </p>
    <p>
         ton nom est 
        <?php echo  $_SESSION['nom']; ?> !<br />
        
    </p>
    <p>
        et vous avez  
        <?php echo  $_SESSION['age']; ?> ans
    </p>
    </body>
</html>