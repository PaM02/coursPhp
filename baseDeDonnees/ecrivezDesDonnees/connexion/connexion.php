<?php 
// Connexion à la base de données

include("bdd.php"); 

//  Récupération de l'utilisateur et de son pass hashé//htmlspecialchars eleiminer les attaques
$pseudo = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST['pass']);

$req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($pass, $resultat['pass']);

//si le pseudo on ne trouve pas le pseudo dans la bdd
if (!$resultat)
{   
    // Redirection du visiteur vers la page index
    header('Location: index.php?erreur=1');
}

//si le mot de pass est pas correct
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;

        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
        {
            echo 'Bonjour ' . $_SESSION['pseudo'];
            echo 'Vous êtes connecté !';
        }
        
    }
    else {

        // Redirection du visiteur vers la page index
        header('Location: index.php?erreur=1'); 
        
    }
}

/*

//mettre ceci sur toute les pages pour indiquer au membre qu'il est connecté
<?php 
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
*/
?>

