<?php
// On crée notre array $coordonnees 
//tableau assossiative on chage les numéros par des chaine de carateres 
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

//c'est du pareil au meme
$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';

//aficher un seul element la ville
echo $coordonnees['ville'];
?>