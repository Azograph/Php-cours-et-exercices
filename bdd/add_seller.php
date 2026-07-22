<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="" method="post">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
            <input type="submit" value="S'inscrire" name="submit">
        </form>
    </main>
    <footer></footer>
</body>
</html>


<?php

include 'bdd_connect.php';
include '../vendor/autoload.php';


if (isset($_POST["submit"])) {
    //test si les champs sont remplis    
    if (empty($_POST["firstname"]) || empty($_POST["lastname"])) {
        echo "Veuillez remplir tous les champs";
    }
    //Vérifier les données 
    else if (strlen($_POST["firstname"]) < 3 || strlen($_POST["lastname"] < 3)) {
        echo "Le nom et le prénom doivent avoir au moins 2 caractères";
    } else {
        //nettoyage (avec fonction sanitize) et déclaration variables 
        $lastname = sanitize($_POST["lastname"]);
        $firstname = sanitize($_POST["firstname"]);
        //Requete SQL (ajouter à la table seller colonne nom prénom les valeur ? )
        $sql = "INSERT INTO seller(lastname, firstname) VALUE(?, ?)";
        //Connexion à la bdd (Appel de la fonction dans le fichier plus haut)
        $bdd = connect_bdd();
        //Préparation de la requête
        $request = $bdd->prepare($sql);
        //Exécution de la requête + attribution des ? 
        $request->execute([$lastname, $firstname]);
        //Affichage
        echo "Le vendeur " . $lastname . " " .  $firstname . " a bien été ajouté à la base de donnée.";
    }
}




// Attribution des ? version 2 + éxécution de la requête
// $request->bindValue(1, $_POST["lastname"]);
// $request->bindValue(2, $_POST["firstname"]);
// $request->execute();

//Attribution des ? version 3 (sans déclaration préalable des variables)
// $request->execute([$_POST["lastname"], $_POST["firstname"]]);