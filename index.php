<?php // pour démarer le php 

//AFFICHER
// Afficher avec echo / conversion string
echo "Hello world\n";
//Afficher un tableau 
$nom_tableau = [];
print_r($nom_tableau);  // Affiche le tableau
echo $nom_tableau[1];   //Affiche l'index 1 du tableau


// VARIABLES
// On ne peut utiliser une variable que si elle à été déclarée AVANT. 
// Pour déclarer une variabble et l'utiliser
$nom = "Tinturier";     // Déclaré
echo $nom . "\n";              // Utilisé

// Autres exemple de variable 
$nbr = 1;
$nbr_virgule = 1.15; 
$status = true;

// Je peux plus tard changer la variable 
$nom = "Calvel";
echo $nom . "\n";  


// CONCATENATION
// Le séparateur de concaténation c'est le point : . 
// Si je veux l'espace, je dois le mettre dans la chaine de caractère
echo "Bonjour" . $nom . "\n";
echo "Salut " . $nom . "\n";
// Dans une chaine de caractère > Il va garder l'espace
echo "Hola $nom" . "\n";


// ALLER A LA LIGNE
// Dans le terminal, dans une chaine de cara : "\n"
// Dans le navigateur : <br>


// RECUPERER UNE VALEUR 
// Avec Readline, c'est l'utilisateur qui va donner une valeur à la variable. 
$valeur = readline("Saisir la valeur");
echo "valeur = " . $valeur ."\n";


//FONCTIONS
//Fonction sans paramètre avec aucun return
function test(): void
{
    echo "message";
}

//Fonction sans paramètre avec return de type int
function nombre(): int 
{
    return 10;
}

//Fonction sans paramètre avec return de type int ou float
function retourner_nombre(): int|float {
    return 110.85; 
}
$nbr1 = 20;
$nbr21 = 50;

//Exemple paramètre d'entrée (type) int ou float nom param
//sortie : format de sortie de type int
function addition(int|float $nbr1, int|float $nbr2) : int{
    $nbr1 = 50;
    return $nbr1;
}

//appel d'une fonction sans paramètre
test();
//appel d'une fonction avec des paramètres
addition($nbr21 , 20);

function defaut(string $test = "ok") : void 
{
    echo $test;
}

defaut();
defaut("valeur");
//exemple avec des valeurs par défault (toujours à la fin !!)
function calcul(int $nbr1, int $nbr2,string $operation = "add"): void 
{
    if ($operation== "add") {
        echo $nbr1 + $nbr2;
    }
    if ($operation == "sous") {
        echo $nbr1 - $nbr2;
    }
}
//Appel de fonction avec des valeurs par défault
calcul(10,20);

calcul(10,20, "sous");


//BOUCLES
//Exemple boucle do while
$secret = 20;
do {
    echo "choisir un nombre entre 1 et 50\n";
    $nbr = readline();
    if($nbr == $secret ) {
        echo "Bravo vous avez trouvé";
    }
} while ($nbr != $secret);

// exemple boucle while
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

//exemple boucle for
for ($i=0; $i < 10; $i++) { 
    echo "valeur " . $i . "\n"; 
}

//exemple 2 while
$mot = "mathieu";
$cpt = 0;

while($cpt < strlen($mot)) {
    echo $mot[$cpt] . "\n";
    $cpt++;
}
//exemple 2 for
for ($i=0; $i < strlen($mot); $i++) { 
    echo $mot[$i] . "\n";
}


//TABLEAU
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


//tableau multidimensionnel
$tab_users = [$tab_associatif, $tab_associatif, $tab_associatif];

print_r($tab_users);

//afficher une colonne d'un tableau multidimensionnel
echo $tab_users[1]["ville"];

$tab_users[1]["ville"] = "Albi";

$tab_users[1]["tel"] = 0601020304;

//parcourir un tableau
for ($i=0; $i < count($tab_indexe) ; $i++) { 
    if ($i==0) {
        unset($tab_indexe[0]);
        sort($tab_indexe);
    }
    echo "index " . $tab_indexe[$i] ."\n";
    
}