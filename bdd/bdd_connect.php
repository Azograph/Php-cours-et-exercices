<?php

//Connexion à la BDD
function connect_bdd() : PDO {
        return new PDO(
        'mysql:host=localhost:3306;dbname=ticket',
        'root',
        'root',
        // Permet d'afficher les erreurs et dit comment : 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

//Fonction de nettoyage de données
function sanitize(string $str) : string {
    return htmlentities(        //Transforme les caractère en entité html / Empêche les injections
        htmlspecialchars(
            strip_tags(
                trim($str)
            )
        )
    );
}

$str = "";
$str = trim($str);
$str = strip_tags($str);
$str = htmlspecialchars($str);
$str = htmlentities($str);