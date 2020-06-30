<?php

function affichage_updatedispo($quantite){
    if($quantite>0){
        return true;
    }

    else if($quantite==0){
        return false;
    }
}

function affichage_restockage($quantite, $nb_ajout){
echo "<p>$nb_ajout ont été ajoutés au stock</p>";
    return $quantite - $nb_achat;
    }

    
?>