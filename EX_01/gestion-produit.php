<?php

function update_dispo($quantite){
    if($quantite>O){
        return true;
    }
    else{
        return false;
    }
}
function restockage($quantite, $nb_ajout){
    echo "<p> {$nb_ajout} ont été ajouté au stock.";
    return $quantite+$nb_ajout;
}
function achat($quantite,$nb_achat){
    echo "<p> {$nb_achat} produits ont été ajoutés achetés.</p>";
    return $quantite-$nb_achat;
}
?>