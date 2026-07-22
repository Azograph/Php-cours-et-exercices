<?php

//Connexion à la BDD
function connect_bdd() : PDO {
        return new PDO(
        'mysql:host=localhost:3306;dbname=ticket',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

//Fonction de nettoyage de données
function sanitize(string $str) : string {
    return htmlentities(
        htmlspecialchars(
            strip_tags(
                trim($str)
            )
        )
    );
}