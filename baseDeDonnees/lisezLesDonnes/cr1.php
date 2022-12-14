<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost:3308;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query(' SELECT  COUNT(*) AS id  FROM `jeux_video`');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['id']; ?><br />
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>