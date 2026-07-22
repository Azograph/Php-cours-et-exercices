<?php 


include 'bdd_connect.php';
include '../vendor/autoload.php';

//Vérifier si un produit existe

$sql = "SELECT p.product_name FROM product AS p";
$bdd = connect_bdd();
$request = $bdd->prepare($sql);
$request->execute();
$name = $request->fetch();


function is_product_exist(string $name): bool {
    if ($name != null) {
        return true;
    } return false;
}

?>