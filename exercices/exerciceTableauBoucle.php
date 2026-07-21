<?php

//Exercice 1
$nbr = 1;

while ($nbr != 11 ) {
    echo $nbr . "\n";
    $nbr++;
};


//Exercice 2 
$nbr = 20;
while ($nbr > 0 ) {
    echo $nbr . "\n";
    $nbr--;
};
echo "Décollage !";


//Exercice 3
$mdp = "php2026";

do {
    $demande = readline("rentrez votre mot de passe : \n");
    if ($demande == $mdp) {
        echo "Accés autorisé";
    }
} while ($demande != $mdp);


//Exercice 4
$table = 7;
$multiple = 1;

for ($i=0; $i < 10; $i++) { 
    $calcul = $table * $multiple;
    echo $table . "x" .  $multiple . "=" . $calcul  . "\n"; 
    $multiple++;
}


//Exercice 5
$valeur = 0;
$somme = 0;

for ($i=0; $i < 100; $i++) {
    $valeur++;
    $somme = $somme + $valeur; 
}

echo $somme . "\n";

//Exercice 5 bis
$somme = 0;

for ($i=0; $i <= 100; $i++) {
    $somme = $somme + $i; 
}

echo $somme;

//Exercice 6 
$chiffre = 0;

for ($i=0; $i <= 50; $i++) {
    $chiffre++;
    if ($chiffre%2 == 0) {
        echo $chiffre;
    }
}


//Exercice 7
for ($i=0; $i < 5; $i++) { 
    echo "ligne";
    for ($j=0; $j <= $i ; $j++) { 
        echo $j . " ";
    }
    echo "\n";
}

//bis
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


//Exercice 8
$fruits = [
    "Pomme",
    "Poire",
    "Banane",
    "Orange",
    "Kiwi"
];


echo $fruits[0];
echo $fruits[4];
//Count($tableau) permet de prendre le nombre d'index du tableau.
echo $fruits [count ($fruits) -1] . "\n"; 
echo "il y à :" . count($fruits) . "fruits dans le tableau \n";

echo "Boucle sur le tableau"; 

for ($i=0; $i < count($fruits) ; $i++) { 
    echo $fruits[$i] . "\n";
}

//Exercice 9
$notes = [12, 15, 8, 19, 17];
$somme = 0;

for ($i=0; $i < count($notes); $i++) {
    $somme += $notes[$i];
}

echo "La somme des notes est de : " . $somme;

//Exercice 10
$personne = [
    "firstname" => "Alice",
    "lastname" => "Martin",
    "age" => 28,
    "city" => "Bordeaux"
];

echo "PrÃ©nom : " . $personne["firstname"] . "\n";
echo "Nom : " . $personne["lastname"] . "\n";
echo "Age : " . $personne["age"] . "\n";
echo "Ville : " . $personne["city"] . "\n";
foreach ($personne as $key => $value) {
    echo $key . " : " . $value . "\n";
}

//Exercice 11 
$fruits = [
    "Pomme",
    "Poire",
    "Banane",
    "Orange",
    "Kiwi"
];

foreach ($fruits as $value) {
    echo " J'aimes les  " . $value . "s .\n";
}

//Exercice 12 
$personne = [
    "firstname" => "Alice",
    "lastname" => "Martin",
    "age" => 28,
    "city" => "Bordeaux"
];

foreach ($personne as $key => $value) {
    echo $key . " : " . $value . "\n";
}


//Exercice 13/ 14 / 15
$tab = [12,3,22,6,47,89,1,187,2,26,44,22,47,1];

//13
$nbr = $tab[0];

for ($i=0; $i < count($tab); $i++) {
    if ($nbr < $tab[$i]) {
        $nbr = $tab[$i];
    }
} 

echo "Le chiffre le plus grand du tableau est : " . $nbr . "\n";

//14
$somme = 0;
for ($i=0; $i < count($tab); $i++) {
    $somme = $tab[$i] + $somme;
}

$moyenne = $somme / count($tab);
echo "La moyenne du tabealu est de : " . $moyenne . "\n";

//15
$nbr = $tab[0];

for ($i=0; $i < count($tab); $i++) {
    if ($nbr > $tab[$i]) {
        $nbr = $tab[$i];
    }
} 

echo "Le chiffre le plus petit du tableau est : " . $nbr . "\n";

//Exercice 16 
$nbr = 26; 

for ($i=0; $i < 10; $i--) {
    $devine = readline("Choisi un nombre entre 1 et 100 : \n");
    $tentative = 10;
    $tentative --;
    if ($devine == $nbr) {
        echo "Bravo ! \n";
    }
    else if ($nbr < $devine) {
        echo " Trop grand ! \n";
        echo "il te reste " . $tentative . " tentatives \n";
    }
    else if ($nbr > $devine) {
        echo "Tros petit ! \n";
        echo "il te reste " . $tentative . " tentatives \n";
    }
 }


 //Exercice 17
$products = [
    [
        "name" => "Clavier",
        "price" => 49.99,
        "stock" => 12
    ],
    [
        "name" => "Souris",
        "price" => 19.90,
        "stock" => 0
    ],
    [
        "name" => "Écran",
        "price" => 189.00,
        "stock" => 5
    ]
];

for ($i=0; $i < count($products); $i++)  {
    echo $products[$i]["name"] . ": ";
    echo $products[$i]["price"] . " ";
    if ($products[$i]["stock"] <= 0) {
        echo "- En rupture \n";
    } else echo "- En stock \n";
}


//Exercice 18
//D'après le tabmeau précédent

$stock = 0;
for ($i=0; $i < count($products); $i++) {
    if ($products[$i]["stock"] != 0) {
        $stock += $products[$i]["stock"];
    }
}
 echo "La valeur total du stock est de : " . $stock;


//Exercice 19
$users = [
    [
        "firstname" => "Alice",
        "lastname" => "Martin",
        "age" => 25
    ],
    [
        "firstname" => "Lucas",
        "lastname" => "Petit",
        "age" => 17
    ],
    [
        "firstname" => "Emma",
        "lastname" => "Durand",
        "age" => 32
    ]
];

for ($i=0; $i < count($users); $i++) {
    echo $users[$i]["firstname"] . " ";
    echo $users[$i]["lastname"] . " ";
    if ($users[$i]["age"] >= 18) {
        echo " est majeur \n";
    } else echo "est mineur \n";
}


//Exercice 20