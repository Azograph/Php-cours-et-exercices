<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> <h1> PHP </h1></header>
    <main>

        <h2>Exercice 1</h2>

        <form action="" method="post">
            <input type="text" name="prixHT" placeholder="Prix HT">
            <input type="text" name="nombreArticle" placeholder="Nombre d'articles">
            <input type="text" name="tva" placeholder="TVA">
            <input type="submit" value="Ajouter" name="submit">
        </form>

        <?php
            // Test si le formulaire est soumis
            if (isset($_POST["submit"])) {
                //test si les champs sont remplis
                if (!empty($_POST["prixHT"]) && !empty($_POST["nombreArticle"]) && !empty($_POST["tva"])) {
                    if (is_numeric($_POST["prixHT"]) && is_numeric($_POST["nombreArticle"]) && is_numeric($_POST["tva"])) {
                    $prixTCC = $_POST["prixHT"] * $_POST["nombreArticle"] * (($_POST["tva"] / 100)+1);
                    echo "Le prix TCC ext égal à : " . $prixTCC . "€";
                    } else {echo "Veuillez saisir des chiffres"; } 
                } else {echo "Veuillez remplir le formulaire";}
            }
        ?>

        <h2>Exercice 2</h2>

        <form action="" method="POST">
            <input type="text" name="nbr1" placeholder="Nombre">
            <input type="text" name="nbr2" placeholder="Nombre">
            <input type="text" name="operateur" placeholder="Opérateur">
            <input type="submit" value="Calculer" name="submit">
        </form>

        <?php
            // Test si le formulaire est soumis
            if (isset($_POST["submit"])) {
                //test si les champs sont remplis
                if (!empty($_POST["nbr1"]) && !empty($_POST["nbr2"]) && !empty($_POST["operateur"])) {

                    $a = $_POST["nbr1"];
                    $b = $_POST["nbr2"];
                    $operateur = $_POST["operateur"];
                    
                    //Fonction calcul
                    function calculer(float|string $a, float|string $b, string $operateur): float|string {
                    // Vérification des données (chiffres) : 
                    if (!is_numeric($a) || !is_numeric($b)) {
                        return "Veuillez saisir des nombres";
                    }

                        // Fonction des opérateurs
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
                    
                        //Choix de l'opérateur
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
                    //Appel de la fonction calcul
                    echo $a . $operateur . $b . "= " . calculer($a, $b, $operateur);

                } else {echo "Les champs ne sont pas remplis";}
            } 
        ?>

        <h2>Exercice 3</h2>
        
        <?php
        const EMAIL = "admin@test.com";
        const PASSWORD = "php2026";
        ?>

        <form action="" method="post">
            <label for="email">Saisir votre email</label>
            <input type="email" name="email">
            <label for="password">Saisir votre mot de passe</label>
            <input type="password" name="password">
            <input type="submit" value="se connecter" name="submit">
        </form>
        <p><?= connexion(); ?></p>

    <?php

        function connexion(): string
        {
            //test si le formulaire est soumis
            if (isset($_POST["submit"])) {
                //test si les 2 champs sont vides
                if (empty($_POST["email"]) || empty($_POST["password"])) {
                    return "Veuillez remplir tous les champs du formulaire";
                }
                //Test si le mail est invalide
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    return "Le mail n'est pas valide";
                }
                //test si le mail est différent de celui attendu
                if ($_POST["email"] != EMAIL) {
                    return "les informations de connexion sont invalides";
                }
                //Test si le mot de passe est différent de celui attendu
                if ($_POST["password"] != PASSWORD) {
                    return "les informations de connexion sont invalides";
                }
                return "Connecté";
            }
            return "";
        }
    ?>
        
        <h2>Exercice 4</h2>

        <form action="" method="post">
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="email" placeholder="Adresse mail">
            <input type="text" name="mdp" placeholder="Mot de passe">
            <input type="text" name="mdpConfirm" placeholder="Confirmer votre mot de passe">
            <input type="text" name="dateN" placeholder="Date de naissance : JJ/MM/AAAA">
            <input type="submit" value="Envoyer" name="submit">
        </form>

        <?php 
        //Vérification submit
        if (isset($_POST["submit"])) {
            //Vérification champ remplis 
            if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["mdp"]) && !empty($_POST["mdpConfirm"]) && !empty($_POST["dateN"])) {

                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $mdp = $_POST["mdp"];
                $mdpConfirm = $_POST["mdpConfirm"];
                $dateN = $_POST["dateN"];


                //Nom et Prénom avec 2 caractère
                //Nom 
                if (strlen($nom)> 2) {
                    echo "Nom : " . $nom .  "<br>";
                } else { echo "Nom incorrect <br> ";}
                //Prenom  
                if (strlen($prenom)> 2) {
                    echo "Préom : " . $prenom . "<br>";
                } else { echo "Prénom incorrect <br> ";}

                //Adresse email valide 
                if (str_contains($email,'@')) {
                    echo "Adresse email : " . $email . "<br>";
                } else { echo "Adresse mail invalide <br>";}

                //Mdp avec 8 caractères
                if (strlen($mdp)> 8) {
                    echo "Mot de passe valide <br>";

                    //Confirmation mdp correct 
                    if ($mdpConfirm == $mdp) {
                    echo "Mot de passe correct <br>";
                    
                    } else { echo "Mot de passe incorrect <br>  ";}
                } else { echo "Mot de passe trop court <br> ";}
                
                
                //Vérification âge 
                
            }
        }

        ?>

    <h3>Exercice 4 correction </h3>

    <form action="" method="post">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <label for="confirm-password">Confirmer le mot de passe</label>
        <input type="password" name="confirm-password">
        <label for="age">date de naissance</label>
        <input type="date" name="age">
        <input type="submit" value="S'inscrire" name="submit">
    </form>

    <?php
    //test si le formulaire est submit
    if (isset($_POST["submit"])) {
        //test si les champs sont remplis
        if (
            !empty($_POST["firstname"]) && !empty($_POST["lastname"]) &&
            !empty($_POST["email"]) && !empty($_POST["password"]) &&
            !empty($_POST["confirm-password"]) && !empty($_POST["age"])
        ) {

            //test si le nom et le prénom ont une taille de 2 caractrères min
            if (strlen($_POST["firstname"]) >= 2 && strlen($_POST["lastname"]) >= 2) {
                //test si le mail est valide 
                if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    //test si les mots de passe ont au moins 8 caarctères
                    if (strlen($_POST["password"]) >= 8 && strlen($_POST["confirm-password"]) >= 8) {
                        //test si les 2 mots de passe sont identiques
                        if ($_POST["confirm-password"] == $_POST["password"]) {
                            //test si l'age est égal ou supérieur à 18
                            $date_courante = new DateTime();
                            $date_naissance = new DateTime($_POST["age"]);
                            if ($date_courante->diff($date_naissance)->y >= 18) {
                                echo "Récapitulatif : <br>";
                                echo "Nom : " . $_POST["lastname"] . "<br>";
                                echo "Prénom : " . $_POST["firstname"] . "<br>";
                                echo "Email : " . $_POST["email"] . "<br>";
                                echo "Vous etes majeur <br>";
                            } else {
                                echo "Vous etes mineur";
                            }
                        } else {
                            echo "Les mots de passe ne correspondent pas";
                        }
                    } else {
                        echo "Mot de passe sont trop court ";
                    }
                } else {
                    echo "Le mail est invalide";
                }
            } else {
                echo "Le nom et le prénom doivent avoir au moins 2 caractères";
            }
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }

    ?>


    <h3>Exercice 4 / Fonction </h3>

        <form action="" method="post">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
            <label for="confirm-password">Confirmer le mot de passe</label>
            <input type="password" name="confirm-password">
            <label for="age">date de naissance</label>
            <input type="date" name="age">
            <input type="submit" value="S'inscrire" name="submit">
        </form>
        <div><?= inscription(); ?></div>

        <?php

        function inscription(): string {
            if (isset($_POST["submit"])) {
                //test si les champs sont remplis    
                if (
                    empty($_POST["firstname"]) || empty($_POST["lastname"]) ||
                    empty($_POST["email"]) || empty($_POST["password"]) ||
                    empty($_POST["confirm-password"]) || empty($_POST["age"])
                ) {
                    return "Veuillez remplir tous les champs";
                }
                //Test si le nom ou prénom sont plus petit que 2
                if (strlen($_POST["firstname"]) < 2 || strlen($_POST["lastname"] < 2)) {
                    return "Le nom et le prénom doivent avoir au moins 2 caractères";
                } 
                //Test si le mail est invalide
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    return "Le mail est invalide";
                }
                $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
                //Test si les mots de passe sont invalides
                if (
                    !preg_match($regex, $_POST["password"]) ||
                    !preg_match($regex, $_POST["confirm-password"])
                    ) {
                    return "Les mots de passe sont invalides";
                }
                //Test si les 2 mots de passe sont différents
                if ($_POST["confirm-password"] != $_POST["password"]) {
                    return "Le mots de passe ne correspondent pas";
                }
                //test si l'age est égal ou supérieur à 18
                $date_courante = new DateTime();
                $date_naissance = new DateTime($_POST["age"]);
                if ($date_courante->diff($date_naissance)->y < 18) {
                    return "Vous etes mineur";
                }
                return "Récapitulatif : <br>
                        Nom : " . $_POST["lastname"] . "<br>
                        Prénom : " . $_POST["firstname"] . "<br>
                        Email : " . $_POST["email"] . "<br>
                        Vous etes majeur <br>";
            }
            return "";
        }

        ?>

        <h2>Exercice 5 </h2>
        
        


    </main>
</body>
</html>