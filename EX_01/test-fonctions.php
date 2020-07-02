<?php
$nom_produit='T-shirt femme';
$couleur='Rouge';
$prix=15.50;
$disponible=true;
$quantite=10;
include('affichage.php');
include('gestion-produit.php');
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=achat($quantite, $nb_achat);
$disponible=uptade_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantité=achat($quantite, $nb_achat);
$disponible=uptade_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$disponible=restockage($quantite, $nb_ajout);
?>


