<?php

include 'env.php';
include 'bdd/bdd_connect.php';
include 'model/category.php';


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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Liste de categories</title>
</head>

<body>
    <main class="container-fluid">
        <!--Liste déroulante dynamique -->
        <select name="" id="">
            <?php foreach (getAllCategories() as $category) : ?>
                <option value="<?= $category["id"] ?>"><?= $category["category_name"] ?></option>
            <?php endforeach ?>

        </select>
        <!--checkbox dynamique -->
        <?php foreach (getAllCategories() as $category) : ?>
            <label for="category"><?= $category["category_name"] ?></label>
            <input type="checkbox" name="category" value="<?= $category["id"] ?>">
        <?php endforeach ?>
        <!--Radio group dynamique -->
        <?php foreach (getAllCategories() as $category) : ?>
            <label for="category"><?= $category["category_name"] ?></label>
            <input type="radio" name="category" value="<?= $category["id"] ?>">
        <?php endforeach ?>
        <!--Liste déroulante dynamique multiple -->
        <select name="" multiple size="4">
            <?php foreach (getAllCategories() as $category) : ?>
                <option value="<?= $category["id"] ?>"><?= $category["category_name"] ?></option>
            <?php endforeach ?>
        </select>
    </main>
</body>

</html>