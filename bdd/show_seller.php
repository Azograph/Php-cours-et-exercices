<?php

include 'env.php';
include 'bdd/bdd_connect.php';
include 'model/seller.php';

//Récuper tous les vendeurs
function getAllSeller(): array {
    try {
        //écrire la requête SQL
        $sql = "SELECT s.id, s.firstname, s.lastname FROM seller AS s";
        //Se connecter à la BDD
        $bdd = connect_bdd();
        //préparer la requête
        $request = $bdd->prepare($sql);
        //Exécuter la requête
        $request->execute();
        //récupérer les données
        $sellers = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        echo $e->getMessage();
    }   
    return $sellers ?? [];
}

$sellers = getAllSeller();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des vendeurs</title>
</head>
<body>
    <main>
        <?php foreach ($sellers as $seller) : ?>
            <article>
            <p id="<?= $seller["id"] ?>"><?= $seller["firstname"] . " " . $seller["lastname"] ?></p>
            </article>
        <?php endforeach ?>
    </main>
</body>
</html>