<?php

//Exercice 1
function bonjour (): void {
    echo "Bonjour tout le monde !";
}

bonjour();


//Exercice 2
$prenom = readline("Saisir votre prenom \n");

function bonjour2(string $prenom): void {
    echo "Bonjour $prenom";
}

bonjour2($prenom);

//Exercice 3 - Majuscule & minuscules
// ucfirst(strolower($prenom))  ---> 
// Permet de mettre la première lettre en Maj --> ucfirst();
// Permet de mettre en minuscule le reste du mot --> strtolower();
$prenom = readline("Saisir votre prenom \n");
$nom = readline("Saisir votre nom \n");

function bonjour3 (string $prenom, string $nom): void {
    echo "Bonjour" . ucfirst(strtolower($prenom)) . $nom;
}

bonjour3($prenom, $nom);


//Exercice 4
$a = readline("saisir un chiffre \n");
$b = readline("Saisir un chiffre \n");

function addition0(int $a, int $b): int {
    return $a + $b;
}

echo addition0($a,$b);

//Exercice 5
//Probablement pas necessaire de tout stocker dans des variables
//Cf exercice 3 & 4
$a = readline("saisir un chiffre \n");
$b = readline("Saisir un chiffre \n");

function addition(int $a, int $b): int {
    if (is_numeric($a) && is_numeric($b)) {
        $addition = $a + $b;
        return $addition;
    } else return "Veuillez saisir un chiffre";
}

function soustraction(int $a, int $b): int {
    if (is_numeric($a) && is_numeric($b)) {
        $soustraction = $a - $b;
        return $soustraction;
    } else return "Veuillez saisir un chiffre";
}

function multiplication(int $a, int $b): int {
    if (is_numeric($a) && is_numeric($b)) {
        $multiplication = $a * $b;
        return $multiplication;
    } else return "Veuillez saisir un chiffre";
}

function division(int $a, int $b): int | string {
    if (is_numeric($a) && is_numeric($b) && ($a == 0 OR $b == 0)) {
        return "Division par 0 impossible";
    } else 
        $division = $a / $b;
        return $division;
}

echo "addition : " . addition($a, $b) . "\n";
echo "soustraction : " . soustraction($a, $b)  . "\n";
echo "multiplication : " . multiplication($a, $b)  . "\n";
echo "division : " . division($a, $b)  . "\n";

//Exercice 5 Correction 
function soustraction2(int $a, int $b): int {
    return $a - $b;
}

function multiplication2(int $a, int $b): int {
    return $a * $b;
}

function division2(float $a, float $b): float {
    return $a / $b;
}

echo "Saisir un nombre\n";
$a = readline();
echo "Saisir un autre nombre \n";
$b = readline();

//test si les 2 valeurs sont des nombres
if (is_numeric($a) && is_numeric($b)) {
    //Appel des fonctions
    echo "addition " . addition($a,$b) . "\n";
    echo "soustraction " . soustraction($a,$b) . "\n";
    echo "multiplication " . multiplication($a,$b) . "\n";

    //Si $b est diffÃ©rent de 0
    if ($b != 0) {
        echo "division " . division($a,$b) . "\n";
    } 
    //Test $b vaut 0
    else {
        echo "Division par 0 impossible";
    }
} else {
    echo "Veuillez saisir des nombres";
}


//Exercice 6
const TVA = 20;
$prixHT = readline("Saisir le prix de l'article \n");
$nbr_article = readline("Saisir le nombre d'articles \n");

function calculTTC(float $prixHT, float $nbr_article): float {
    if (is_numeric($prixHT)) {
        $prixTTC = $prixHT * $nbr_article * ((TVA /100) +1); 
        return $prixTTC;
    } else return "Erreur";
}

echo calculTTC($prixHT, $nbr_article);


//Exercice 6 Correction 
//Permet de limité le nombre de chiffre après la virgule --> round(2)
function estMajeur2(int $age): bool {
    if ($age >= 18) return true;
    return false;
}

echo "Saisir votre age\n";
$age = readline();
if ($age <= 0) {
    echo "L'age est invalide";
}
else if (estMajeur($age)) {
    echo "Vous êtes Majeur";
}
else {
    echo "Vous êtes Mineur";
}

//Exercice 7
//estMajeur($age)? "1" : "2"; 
//Le ? permet de "déclarer" une condition 
//Traduction = Si estMajeur est vrai alors "1" sinon "2". 
$age = readline("Saisir votre age \n");

function estMajeur(int $age): bool {
    if ($age >= 18) {
        return true; 
    }
    return false;
}

echo estMajeur($age)? "Vous êtes majeur" : "Vous êtes mineur";

//Exercice 8
//Cf exercice 3
$prenom = readline("Saisir votre prenom \n");
$nom = readline("Saisir votre nom \n");

function nomComplet(string $prenom, string $nom): string {
    return strtoupper($nom[0]) . substr($nom, 1) . strtoupper($prenom[0]) . substr($prenom, 1);
}

echo nomComplet($prenom, $nom);


//Exercice 9 
$prenom = readline("Saisir votre prenom \n");
$nom = readline("Saisir votre nom \n");

function initiales(string $prenom, string $nom): string {
    return ucfirst($nom[0]) . "." . ucfirst($prenom[0]);
}

echo initiales($prenom, $nom);


//Exercice 10
$prenom = readline("Saisir votre prenom \n");
$nom = readline("Saisir votre nom \n");

function formaterNom(string $prenom, string $nom): string {
    return strtoupper($nom) . " " . ucfirst(strtolower($prenom));
}

echo formaterNom($prenom, $nom);

//Exerice 11 - Taille
$texte = readline("saisir du texte \n");

function nombreCaracteres(string $texte): int {
    return strlen($texte);
}

echo nombreCaracteres($texte);


//Exercice 12
$nombre = readline("Saisir un nombre \n");

function estPair(int $nombre): bool {
    if ($nombre %2 == 0) {
        return true; 
    } 
    else return false;
}

echo estPair($nombre)? "Nombre pair" : "Nombre impair";


//Exercice 13
$a = readline("saisir un chiffre \n");
$b = readline("Saisir un chiffre \n");

function plusGrand(int $a, int $b): int {
    if (is_numeric($a) && is_numeric($b)) {
        if ($a > $b) {
            return $a; 
        }  
    } 
    return $b;
}

echo "le nombre " .  plusGrand($a, $b) . " est le plus grand";


//Exercice 14
$a = readline("saisir un chiffre \n");
$b = readline("Saisir un chiffre \n");

function plusPetit(int $a, int $b): int {
    if (is_numeric($a) && is_numeric($b)) {
        if ($a < $b) {
            return $a; 
        } 
    } 
    return $b;
}

echo "le nombre " .  plusPetit($a, $b) . " est le plus petit";


//Exercice 15
$temperature = readline("Quel temperature fait-il ? \n");

function meteo(int $temperature): string {
    if ($temperature < 0) {
        return "Il gèle";};
    if ($temperature == 0 AND $temperature <= 15) {
        return "Il fait froid";};
    if ($temperature >= 16 AND $temperature <= 25) {
        return "Il fait bon";};
    if ($temperature > 25) {
        return "Il fait chaud";}
    return "erreur";
} 

echo meteo($temperature);


//Exercice 16
$dateNaissance = new DateTime(readline("Saisir votre anne de naissance \n"));
$anneeNaissance = $dateNaissance->format('Y');


function calculAge(int $anneeNaissance): int {
    $anneeCourante = date('Y');
        if (is_numeric($anneeNaissance) && $anneeCourante - $anneeNaissance < 0) {
            return "Saisir une date valide";
        } else {
            return ($anneeCourante-$anneeNaissance);
    }
}

echo "Vous avez " . calculAge($anneeNaissance) . " ans";


//Exercice17
function jourActuel(): string {
    $date = new DateTime();
    switch ($date->format('N')) {
        case 1:
            return "Lundi";
        case 2:
            return "Mardi";
        case 3:
            return "Mercredi";
        case 4:
            return "Jeudi";
        case 5:
            return "Vendredi";
        case 6:
            return "Samedi";
        default:
            return "Dimanche";
    }
};

echo "Ajourd'hui nous somme" . jourActuel();


//Exercice 18
$naissance = new DateTime(readline("Saisir votre date de naissance \n"));

function joursVecus(DateTime $naissance): int {
    $aujourdhui = new DateTime();
    $intervalle = $aujourdhui->diff($naissance);
    return $intervalle->days;
}

echo "Depuis ma naissance il s'est écoulé : " . joursVecus($naissance) . " jours";


//Exercice 19
function jourNaissance(DateTime $naissance): string {
    switch($naissance->format('N')) {
        case 1:
            return "Lundi";
        case 2: 
            return "Mardi";
        case 3: 
            return "Mercredi";
        case 4:
            return "Jeudi";
        case 5:
            return "Vendredi";
        case 6:
            return "Samedi";
        default:
            return "Dimanche";
    }
}

echo "Saisir votre date de naissance ex : 2022-01-01\n" ;
$date_naissance = new DateTime(readline());

echo "Mon anniverssaire est un " . jourNaissance($date_naissance);


//Exercice 20
function addition4(int $a, int $b): int {
    return $a + $b;
}

function soustraction4(int $a, int $b): int {
    return $a - $b;
}

function multiplication4(int $a, int $b): int {
    return $a * $b;
}

function division4(float $a, float $b): float {
    return $a / $b;
}

function calculer(float|string $a, float|string $b, string $operateur): float|string {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Veuillez saisir des nombres";
    }
    switch ($operateur) {
            case '+':
                return addition4($a,$b);
            case '-':
                return soustraction4($a,$b);
            case '*':
                return multiplication4($a,$b);
            case '/':
                if ($b != 0) return division4($a,$b);
            default:
                return "operateur inexistant";
        }
}

echo "Veuillez saisir un nombre\n";
$nbr1 = readline();
echo "Veuillez saisir un nombre\n";
$nbr2 = readline();
echo "Veuillez saisir un operateur : +,-,/,* \n";
$operateur = readline();

echo "le rÃ©sultat est : " . calculer($nbr1, $nbr2, $operateur);


//Exercice 21
function addition3(int $a, int $b): int {
    return $a + $b;
}

function soustraction3(int $a, int $b): int {
    return $a - $b;
}

function multiplication3(int $a, int $b): int {
    return $a * $b;
}

function division3(float $a, float $b): float {
    return $a / $b;
}

function puissance(float $nombre, int $exposant): float {
    return pow($nombre,$exposant);
}

function racine(float $nombre): float {
    return sqrt($nombre);
}

function calculer2(float|string $a, float|string $b, string $operateur): float|string {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Veuillez saisir des nombres";
    }
    switch ($operateur) {
            case '+':
                return addition3($a,$b);
            case '-':
                return soustraction3($a,$b);
            case '*':
                return multiplication3($a,$b);
            case '/':
                if ($b != 0) return division3($a,$b);
            case '**':
                return puissance($a,$b);
            case '²':
                return racine($a);
            default:
                return "operateur inexistant";
        }
}

echo "Veuillez saisir un nombre\n";
$nbr1 = readline();
echo "Veuillez saisir un nombre\n";
$nbr2 = readline();
echo "Veuillez saisir un operateur : +,-,/,*, **, ² \n";
$operateur = readline();

echo "le résultat est : " . calculer($nbr1, $nbr2, $operateur);
