<?php

$tableau = [];
$a=0;
$email = "coucou@gmail.com";
$prenom = readline();
$prixHT = 10;

// ////////////////////////////////////////////

// GLOBALE

// --------------------------------------------

// count($tableau) permet de prendre le nombre d'index du tableau.
count($tableau); 

// Verifier si c'est un nombre
is_numeric($a); //ou avec ! pour l'inverse

// Arrondis un nombre
round($prixHT * ((TVA/100) + 1),2);

// Demande une saisi
readline("Nom de la saisie");

// Verifier si une chaine de caractère contient un caractère 
str_contains($email, "@");

// str_repeat("truc à répéteré, nombre de fois)
str_repeat("x", 10);

// trim() Nettoyage : suppression des espaces
$verifie = trim($prenom);

// Met le premier caractère en majuscule
ucfirst($prenom);

// Renvoie une chaine en minuscule
strtolower($prenom);

// Renvoie une chaine en majuscule
strtoupper($prenom);

// Date heure local 
date_default_timezone_set('Europe/Paris');  // Fuseau horraire local
$actu = new DateTime();                     // Date
$heure = $actu->format('H:i:s');            // Format heure:minutes:seconde
$date = date('d-m-Y');                      // Date format JJ/MM/AAAA
echo $heure;


// (////////////////////////////////////////////)

// [BOUCLES]

//--------------------------------------------

//Boucle do while
$secret = 20;
do {
    echo "choisir un nombre entre 1 et 50\n";
    $nbr = readline();
    if($nbr == $secret ) {
        echo "Bravo vous avez trouvé";
    }
} while ($nbr != $secret);

//--------------------------------------------
//Boucle while
echo "choisir un nombre entre 1 et 50\n";
$nbr = readline();

while ($nbr != $secret ) {
    echo "choisir un nombre entre 1 et 50\n";
    $nbr = readline();
    if($nbr == $secret ) {
        echo "Bravo vous avez trouvé";
    }
};
if($nbr == $secret ) {
        echo "Bravo vous avez trouvé";
}

//--------------------------------------------
//Boucle for
for ($i=0; $i < 10; $i++) { 
    echo "valeur " . $i . "\n"; 
}

//--------------------------------------------
//Foreach 
// ($nomdutableau as $1 => $2)
// ($nomdutableau as $colonne => $contenuColonne)
// Si je met que une seule variable ce sera le contenu qui sera pris en compte : 
// ($nomdutableau as $1) 
// ($nomdutableau as $contenuColonne) 
$tab_associatif = [
    "prenom" => "mathieu",
    "nom" => "Mithridate",
    "ville" => "Toulouse"
];

foreach ($tab_associatif as $key => $value) {
    echo $key. ":" . $value . "\n";
}


//////////////////////////////////////////////

//TABLEAU

//--------------------------------------------

//déclaration
$tab_indexe = [10,25,55,88];

//tableau vide 
$tab_vide = [];

//afficher le contenu de la colonne num 2
//echo $tab_indexe[1] . "\n";

//créer une nouvelle colonne
$tab_indexe[4] = 10;

//mettre a jour une colonne
$tab_indexe[1] = 33;

//ajouter à la suite
$tab_indexe[] = 77;

//afficher
print_r($tab_indexe);

//Création d'un tableau associatif
$tab_associatif = [
    "prenom" => "mathieu",
    "nom" => "Mithridate",
    "ville" => "Toulouse"
];

//Afficher une valeur contenu dans une colonne
echo $tab_associatif["ville"];

//Editer une colonne
$tab_associatif["ville"] = "Castres";

//Ajouter une nouvelle colonne
$tab_associatif["code_postal"] = 31100;

//--------------------------------------------
//tableau multidimensionnel
$tab_users = [$tab_associatif, $tab_associatif, $tab_associatif];

print_r($tab_users);

//afficher une colonne d'un tableau multidimensionnel
echo $tab_users[1]["ville"];

$tab_users[1]["ville"] = "Albi";

$tab_users[1]["tel"] = 0601020304;

//--------------------------------------------
//parcourir un tableau
// Supprimer une colone et retrier le tableau pour pas qu'il y ai de trous.
for ($i=0; $i < count($tab_indexe) ; $i++) { 
    if ($i==0) {
        unset($tab_indexe[0]);      // Détruit la colone
        sort($tab_indexe);          // Trie le tableau 
    }
    echo "index " . $tab_indexe[$i] ."\n";
    
}


//////////////////////////////////////////////

//BDD

//--------------------------------------------

//Fonction de connection à la BDD
function connect_bdd() : PDO {
        return new PDO(
        'mysql:host=localhost:3306;dbname=receipt',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

//--------------------------------------------
//Nettoyage des donées
function sanitize(string $str) : string {
    return htmlentities(
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


//--------------------------------------------
//Ecrire, envoyer et récéptionner une requête :
include 'connect_bdd.php';
include '../vendor/autoload.php';

    //1 écrire une requête
    $sql = "SELECT c.id, c.category_name  FROM category AS c ORDER BY c.id ASC";

    //2 se connecter à BDD
    $bdd = connect_bdd();

    //3 préparation de la requête
    $request = $bdd->prepare($sql);

    //assignation des paramètres
 /*    $request->bindValue(1, 2, PDO::PARAM_INT); */

    //4 exécter la requête
    $request->execute();

    //5 récupérer la réponse (all toutes les réponse / fecth une seule)
    $data = $request->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $category) {
        # code...
        echo "Id " . $category["id"] . " nom : " . $category["category_name"] . "<br>";
    }


//////////////////////////////////////////////

// EXEMPLE BOUCLES

//--------------------------------------------

// Vérification de mot de passe mdp
$pwd = "php2026";

do {
    echo "Veuillez saisir un mot de passe\n";
    $test_pwd = readline();
    if ($pwd == $test_pwd) {
        echo "Connexion réussie";
    }
} while($pwd != $test_pwd);


//--------------------------------------------
// Compteur simple
$cpt = 20;

while ($cpt >= 0) {
    echo $cpt . "\n";
    $cpt--;
}
echo "Décollage !";

// --------
$i = 1;

while ($i < 11) {
    echo $i . "\n";
    $i++;
}

/* for ($i=1; $i < 11; $i++) { 
    echo $i . "\n";
} */

//--------------------------------------------
// Structure étoiles
$etoile = "*";

for ($i=0; $i < 5; $i++) { 
    echo $etoile . "\n";
    $etoile .= "*";
}

//version avec str_repeat
for ($i=0; $i < 5; $i++) { 
    # code...
    echo str_repeat("*", $i+1) ."\n";
}


//////////////////////////////////////////////

// EXEMPLE FONCTIONS

//--------------------------------------------
// Calculatrice 
function addition(int $a, int $b): int {
    return $a + $b;
}

function soustraction(int $a, int $b): int {
    return $a - $b;
}

function multiplication(int $a, int $b): int {
    return $a * $b;
}

function division(float $a, float $b): float {
    return $a / $b;
}

function puissance(float $nombre, int $exposant): float {
    return pow($nombre,$exposant);
}

function racine(float $nombre): float {
    return sqrt($nombre);
}

function calculer(float|string $a, float|string $b, string $operateur): float|string {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Veuillez saisir des nombres";
    }
    switch ($operateur) {
            case '+':
                return addition($a,$b);
            case '-':
                return soustraction($a,$b);
            case '*':
                return multiplication($a,$b);
            case '/':
                if ($b != 0) return division($a,$b);
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


//--------------------------------------------
// Nombre de jour depuis naissance / Date
function joursVecus(DateTime $naissance): int {
    //Récupération de la Date courante
    $date_courante = date_create(date('Y-m-d'));
    //Calcul de la différence
    $intervale = date_diff($naissance, $date_courante);
    //formatage de la différence
    return $intervale->format('%a');
}

echo "Veuillez saisir votre date de naissance : ex 2000-01-01\n";

$date_naissance = new DateTime(readline());

echo "Depuis ma naissance il s'est écoulé : " . joursVecus($date_naissance) . " jours." ;


//--------------------------------------------
// Jour actuel
function jourActuel(): string {
    $date_jour = date('N');
    
    switch($date_jour) {
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

echo "Aujourd'hui nous somme " . jourActuel();

//--------------------------------------------
// Calculer l'age 
function calculAge(int $anneeNaissance): int {
    return date('Y') - $anneeNaissance;
}

echo "Saisir votre année de naissance\n";
$anneeNaissance = readline();

echo "Je suis né en " . $anneeNaissance . 
" j'ai " . calculAge($anneeNaissance)  . " an";

//--------------------------------------------
// Nombre plus grand
function plusGrand(int $a, int $b): int {
    if ($a > $b) return $a;
    return $b;
}

echo "Saisir sur nombre\n";
$nombre1 = readline();
echo "Saisir sur nombre\n";
$nombre2 = readline();

echo "Le nombre le plus grand est : " . plusGrand($nombre1, $nombre2);

//--------------------------------------------
// Nombre plus petit
function plusPetit(int $a, int $b): int {
    if ($a < $b) return $a;
    return $b;
}

echo "Saisir sur nombre\n";
$nombre1 = readline();
echo "Saisir sur nombre\n";
$nombre2 = readline();

echo "Le nombre le plus petit est : " . plusPetit($nombre1, $nombre2);

//--------------------------------------------
//Nombre pair et impair
function estPair(int $nombre): bool {
    if ($nombre % 2 == 0) {
        return true;
    }
    return false;
}

echo "Saisir un nombre\n";
$nombre = readline();

if (estPair($nombre)) {
    echo "le nombre : " . $nombre . " est : pair";
} else {
    echo "le nombre : " . $nombre . " est : impair";
}

//--------------------------------------------
// Nombre de caractère
function nombreCaracteres(string $texte): int {
    return strlen($texte);
}

echo "Saisir un mot\n";
$texte = readline();

echo "Il y Ã  : " . nombreCaracteres($texte) . " dans : " . $texte;

//--------------------------------------------
// Formater un nom
function formatterNom(string $prenom, string $nom): string {
    return ucfirst(strtolower($prenom)) . " " . strtoupper($nom);
}

echo "Saisir votre prÃ©nom\n";
$prenom = readline();
echo "Saisir votre nom\n";
$nom = readline();

echo formatterNom($prenom, $nom);

//--------------------------------------------
// Formater les initiales
function initiales(string $prenom, string $nom): string {
    return ucfirst($prenom[0]) . "." . ucfirst($nom[0]);
}

echo "Saisir votre prÃ©nom\n";
$prenom = readline();
echo "Saisir votre nom\n";
$nom = readline();

echo initiales($prenom, $nom);

//--------------------------------------------
//  TVA
const TVA = 20;

function calculTTC(float $prixHT): float {
    return round($prixHT * ((TVA/100) + 1),2) ;
}

echo "Prix TTC : " . calculTTC(13.49) . " €";

//--------------------------------------------
// Météo et temperature
function meteo(int $temperature): string {

    switch($temperature) {
        case 0 :
        case $temperature < 0 :
            return "Il gèle";
        case  $temperature < 15:  
            return "Il fait froid";
        case $temperature < 25 :
            return "Temps agréable"; 
        default :
            return "Il fait chaud";
    }
}

echo "Veuillez saisir une temperature\n";
$temperature = readline();

echo meteo($temperature);