<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="connexion.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="pass">Mot de passe</label> :  <input type="password" name="pass" id="pass" /><br />
        <label for="pass1">Retaper votre mote de passe</label> : <input type="password" name="pass2" id="pass2" /><br />
        <label for="email">adresse email</label> :  <input type="text" name="email" id="emal" /><br />

        <input type="submit" value="Envoyer" />
    </p>
    </form>

    </body>
</html>