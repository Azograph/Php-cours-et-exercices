<?php 

include 'bdd_connect.php';
include '../vendor/autoload.php';

//Vérifier si un produit existe

function is_product_exist(string $name): bool {
    try {
        // 1 Requête
        $sql = "SELECT p.id FROM product AS p WHERE product_name = ?";
        //2 Connexion bdd
        $bdd = connect_bdd();
        //3 Préparer la reqête


    } catch(Exception $e) {
        echo $e->getMessage();
    }
    return true;
}

?>