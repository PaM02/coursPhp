<?php

try
{
	$bdd = new PDO('mysql:host=localhost:3308;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}	
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$nom = $_GET['nom'];
$possesseur = $_GET['possesseur'];
$console = $_GET['console'];
$prix = $_GET['prix'];
$nbre_joueurs_max = $_GET['nbre_joueurs_max'];
$commentaires = $_GET['commentaires'];

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)') or die(print_r($bdd->errorInfo()));
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
?>