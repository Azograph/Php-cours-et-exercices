<?php

include 'env.php';
include 'bdd/bdd_connect.php';


function getAllCategories(): array {
    try {
        //1 ecrire la requête
        $sql = "SELECT c.id, c.category_name FROM category AS c ORDER BY c.id";
        //2 Se connecter à la BDD
        $bdd = connect_bdd();
        //3 Préparer la requête
        $request = $bdd->prepare($sql);
        //4 Exécuter la requête
        $request->execute();
        //5 recupérer les données
        $categories = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    return $categories ?? [];
}

?>