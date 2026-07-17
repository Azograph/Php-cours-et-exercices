<?php

//Exercice 1
echo "Bonjour le monde ! Bienvenue dans le cours PHP.\n<br>";


//Exercice 2
$prenom = "Juliette";
$nom = "Tinturier";
$age = 30;
$ville = "Castelginest";

echo "Je m'appelle $prenom $nom.\n<br>J'ai $age.\n<br>J'habite à $ville.\n<br>";


//Exercice 3
$pi = 3.14159;
$tauxTVA = 20;

echo "Valeur de PI : $pi\n<br> TVA : $tauxTVA %\n<br>";


//Exercice 4
$a = 12;
$b = 8;

echo "Addition : " . $a + $b . "\n";
echo "Soustraction : " . $a - $b . "\n";
echo "Multiplication : " . $a * $b . "\n";
echo "Division : " . $a / $b;


//Exercice 5
$prix_ht = 10;
$quantite = 2;
$tva = 20;

echo "total : " . $prix_ht * $quantite * (($tva / 100) + 1) . "€\n";


//Exercice 6
$prenom = readline("Saisir un prenom ");

echo "Quel est votre prenom ? \n";
echo $prenom . "\n";
echo "Bonjour $prenom ! \n";


//Exercice 7 
$age = readline("Age ");
$age_plus = $age + 1;

echo "Quel âge avez-vous ? \n";
echo "Vous avez $age ans. \nL'année prochaine vous aurez $age_plus ans.\n";

//Exercice 8
$nbr = readline("Nombre pair ");

if ($nbr %2 == 0) {
    $reponse = "Le nombre est pair"; }
    else {
        $reponse = "Le nombre est impair";
};

echo $reponse . "\n";


//Exercice 9
$age = readline("Quel age avez vous ? ");

if ($age >= 18) {
    $reponse = "Vous êtes Majeur";}
    else {
        $reponse = "Vous êtes Mineur";
    };

    echo $reponse . "\n";


//Exercice 10
$nbr1 = readline("Donne un nombre ");
$nbr2 = readline("Donne un deuxième nombre ");

if ($nbr1 > $nbr2) {
    $reponse = "Le premier nombre est plus grand";}; 
if ($nbr1< $nbr2) {
        $reponse = "Le second nombre est plus grand";};
if ($nbr1 == $nbr2) {
        $reponse = "Les nombres sont égaux";};

echo $reponse . "\n";


//Exercice 11
$temperature = readline("Quel temperature fait-il ? ");

if ($temperature < 0) {
    $reponse = "Il gèle";};
if ($temperature >= 0 AND $temperature <= 15) {
    $reponse = "Il fait froid";};
if ($temperature >= 16 AND $temperature <= 25) {
    $reponse = "Il fait bon";};
if ($temperature > 25) {
    $reponse = "Il fait chaud";};

echo $reponse  . "\n";


//Exercice 12
$prenom = readline("Saisir votre prenom : ");
$nom = readline("Saisir votre nom : ");
$age = readline("Quel age avez vous ? ");
$ville = readline("Dans quel ville habitez vous ? ");

echo "Prénom: $prenom \n Nom: $nom \n Age: $age \n Ville: $ville \n"; 


//Exercice 13 - Deviner le nombre
$secret = 8;
$guess = readline("Devine le chiffre : ");

if ($guess == $secret) {
    $reponse = "Bien joué !";}
    else {
        $reponse = "Perdu...";};

echo $reponse  . "\n";


//Exercice 14 -  Calculatrice 
$nbr1 = readline("Saisir un chiffre : ");
$nbr2 = readline("Saisir un chiffre : ");
$ope = readline("Saisir un operatuer : ");

if ($ope == "+") {
    $resultat = $nbr1 + $nbr2;
}; if ($ope == "-") {
    $resultat = $nbr1 - $nbr2;
}; if ($ope == "*") {
    $resultat = $nbr1 * $nbr2;
}; if ($ope == "/") {
    $resultat = $nbr1 / $nbr2;
};

$calcul = "$nbr1 $ope  $nbr2 = $resultat";
echo $calcul;


//Exercices 14 SWITCH CASE  
echo "Saisir un nombre\n";
$nbr1 = readline();
echo "Saisir un operateur : add, sous, multi, div\n";
$operateur = readline();
echo "Saisir un nombre\n";

$nbr2 = readline();

//Test si les 2 variables sont bien des nombres
if (is_numeric($nbr1) && is_numeric($nbr2)) {
    //Test si add
    switch ($operateur) {
        case 'add':
            echo "resultat de l'addition : $nbr1 + $nbr2 = " . $nbr1 + $nbr2;
            break;
        case 'sous':
            echo "resultat de la soustraction : $nbr1 - $nbr2 = " . $nbr1 - $nbr2;
            break;
        case 'multi':
            echo "resultat de la multiplication : $nbr1 x $nbr2 = " . $nbr1 * $nbr2;
            break;
        case 'div':
            if ($nbr2 == 0) {
                echo "La division par 0 est impossible";
            } else {
                echo "resultat de la division : $nbr1 / $nbr2 = " . $nbr1 / $nbr2;
            }
            break;
        default:
            echo "Opérateur n'existe pas";
            break;
    }
}


//Exercice 15 - Bulletin de notes / Moyenne
$note1 = readline("Première note : ");
$note2 = readline("Deuxième note : ");
$note3 = readline("Troisième note : ");
// Ajout de round pour arrondir le resultat 
$moyenne = round(($note1 + $note2 + $note3) / 3,2); 

if ($note1 >=10) {
    echo "$note1 - Admis - ";
    if ($note1 < 11.99) {
        echo "Passable \n";
    }
    else if ($note1 < 13.99) {
        echo "Assez bien \n";
    }
    else if ($note1 < 15.99) {
        echo "Bien";
    } 
    else {
        echo  "Très bien \n";
    }
} 

if ($note2 >=10) {
    echo "$note2 - Admis - ";
    if ($note2< 11.99) {
        echo "Passable \n";
    }
    else if ($note2 < 13.99) {
        echo "Assez bien \n";
    }
    else if ($note2 < 15.99) {
        echo "Bien \n";
    } 
    else {
        echo  "Très bien \n";
    }
} 

if ($note3 >=10) {
    echo "$note3 - Admis - ";
    if ($note3 < 11.99) {
        echo "Passable \n";
    }
    else if ($note3 < 13.99) {
        echo "Assez bien \n";
    }
    else if ($note3 < 15.99) {
        echo "Bien \n";
    } 
    else {
        echo  "Très bien \n";
    }
} 

echo "Moyenne : $moyenne";


//Exercice 16 - plus grand 
echo "1 Saisir un nombre\n";
$nbr1 = readline();
echo "2 Saisir un nombre\n";
$nbr2 = readline();
echo "3 Saisir un nombre\n";
$nbr3 = readline();
echo "4 Saisir un nombre\n";
$nbr4 = readline();
echo "5 Saisir un nombre\n";
$nbr5 = readline();

echo "nbr1 : " . $nbr1 . " nbr2 : " . $nbr2 . " nbr3 : " . $nbr3 . 
" nbr4 : " . $nbr4 . " nbr5 : " . $nbr5 . "\n";

if ($nbr1 > $nbr2 && $nbr1 > $nbr3 && $nbr1 > $nbr4 && $nbr1 > $nbr5) {
    echo "nbr1 est le plus grand";
}
else if ($nbr2 > $nbr1 && $nbr2 > $nbr3 && $nbr2 > $nbr4 && $nbr2 > $nbr5) {
    echo "nbr2 est le plus grand";
}
else if ($nbr3 > $nbr1 && $nbr3 > $nbr2 && $nbr3 > $nbr4 && $nbr3 > $nbr5) {
    echo "nbr3 est le plus grand";
}
else if ($nbr4 > $nbr1 && $nbr4 > $nbr2 && $nbr4 > $nbr3 && $nbr4 > $nbr5 ) {
    echo "nbr4 est le plus grand";
}
else if ($nbr5 > $nbr1 && $nbr5 > $nbr2 && $nbr5 > $nbr3 && $nbr5 > $nbr4 ) {
    echo "nbr5 est le plus grand";
}


//Exercice 17 - plus petit
echo "1 Saisir un nombre\n";
$nbr1 = readline();
echo "2 Saisir un nombre\n";
$nbr2 = readline();
echo "3 Saisir un nombre\n";
$nbr3 = readline();
echo "4 Saisir un nombre\n";
$nbr4 = readline();
echo "5 Saisir un nombre\n";
$nbr5 = readline();

echo "nbr1 : " . $nbr1 . " nbr2 : " . $nbr2 . " nbr3 : " . $nbr3 . 
" nbr4 : " . $nbr4 . " nbr5 : " . $nbr5 . "\n";

if ($nbr1 < $nbr2 && $nbr1 < $nbr3 && $nbr1 < $nbr4 && $nbr1 < $nbr5) {
    echo "nbr1 est le plus petit";
}
else if ($nbr2 < $nbr1 && $nbr2 < $nbr3 && $nbr2 < $nbr4 && $nbr2 < $nbr5) {
    echo "nbr2 est le plus petit";
}
else if ($nbr3 < $nbr1 && $nbr3 < $nbr2 && $nbr3 < $nbr4 && $nbr3 < $nbr5) {
    echo "nbr3 est le plus petit";
}
else if ($nbr4 < $nbr1 && $nbr4 < $nbr2 && $nbr4 < $nbr3 && $nbr4 < $nbr5 ) {
    echo "nbr4 est le plus petit";
}
else if ($nbr5 < $nbr1 && $nbr5 < $nbr2 && $nbr5 < $nbr3 && $nbr5 < $nbr4 ) {
    echo "nbr5 est le plus petit";
}
else {
    echo "les nombres sont identiques";
}


//Exercice 18 -  Longueur d'un prénom
echo "Saisir un prénom\n";
$prenom = readline();

echo "Le prénom contient " . strlen($prenom) . " caractères";


//Exercice 19 - Nom en majuscules 
echo "Saisir votre nom\n";
$nom = readline();
echo "Saisir votre prénom\n";
$prenom = readline();

echo $nom . strtoupper($prenom);


//Exercice 20 - Validation Adresse mail
echo "Saisir votre adresse mail : ";
$mail = readline();

if (str_contains($mail, "@")) {
    echo "Adresse valide";
}   else {
    echo "Adresse non valide";
}


//Exercice 21 - Mot de passe
const PASSWORD = "25";
echo "Saisir votre mot de passe \n";
$demande = readline();

if ($demande == PASSWORD) {
    echo "Connexion réussi";
}   else {
    echo "Connexion échouée";
}


//Exercice 22 - Nettoyage d'une saisie
echo "Saisir votre prénom\n";
$prenom = readline();
$verifie = trim($prenom);

echo $verifie;


//Exercice 23 - Initiales
echo "Saisir votre nom\n";
$nom = readline();
echo "Saisir votre prénom\n";
$prenom = readline();

echo $nom[0] . "." . $prenom[0];


//Exercice 24 - Date format 00/00/0000
$date = date('d-m-Y');
echo "Nous sommes le $date .";


//Exercice 25 - Heure
date_default_timezone_set('Europe/Paris'); // Fuseau horraire
$actu = new DateTime();
$heure = $actu->format('H:i:s');
echo $heure;


//Exercice 26 - Calcul d'âge 

