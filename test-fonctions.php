<?php
$nom_produit="T-shirt femme";
$couleur="Rouge";
$prix= 15.50;
$disponible= true;
$quantite= 10;

include ('affichage.php');
affichage_produit($nom_produit, $couleur, $prix, $disponible);
include ('gestion-produit.php')

affichage_produit($nom_produit, $couleur, $prix, $disponible);
affichage_achat($quantite, 5);
affichage_updatedispo($quantite);
affichage_produit($nom_produit, $couleur, $prix, $disponible);
affichage_achat($quantite, 5);
affichage_updatedispo($quantite);


$Var='True';
echo "$var : $Var <br>";

$var='Quantite';
$Var='10';
echo"$var : $Var <br>";

echo "<br>";

$nom_produit="T-shirt femme";
$couleur="Rouge";
$prix= 15.50;
$disponible= true; $disponible= false;
$quantite= 10;
$nb_ajout= 5;
$nb_achat= 5; 

affichage_titre($nom_produit);
affichage_description($couleur, $prix);
affichage_produit($nom_produit, $couleur, $prix, $disponible);
affichage_updatedispo($quantite);
$quantite=affichage_restockage($quantite, $nb_ajout);
$quantite=affichage_achat($quantite, $nb_achat);



affichage_titre($nom_produit);
$quantite=affichage_achat($quantite, $nb_achat);
affichage_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=affichage_achat($quantite, $nb_achat);
affichage_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=affichage_restockage($quantite, $nb_ajout);
affichage_produit($nom_produit, $couleur, $prix, $disponible);
?>