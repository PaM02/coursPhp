<?php
try
{
	$bdd = new PDO('mysql:host=localhost:3308;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
$req->execute(array(
	'possesseur' => $_GET['possesseur'],
 'prixmax' => $_GET['prix_max']));

echo '<ul>';
while ($donnees = $req->fetch())
{
	echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();



?>