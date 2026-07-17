<?php

//Exercice 1
$nbr = 1;

while ($nbr != 11 ) {
    echo $nbr . "\n";
    $nbr++;
};


//Exercice 2 
$nbr = 20;
while ($nbr != -1 ) {
    echo $nbr . "\n";
    $nbr--;
    if ($nbr == -1 ) {
        echo "Décollage !";
    }
};


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
$affiche = [0 => "*",
            1 => "**",
            2 => "***",
            3 => "****",
            4 => "*****",
            5 => "******"
            ];

for ($i=0; $i < 5; $i++) {
    echo $affiche[$i] . "\n";
}


//Exercice 8
