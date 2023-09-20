<!-- 
Dans cet exercice, vous apprendrez à manipuler les opérateurs ainsi que les conditions php.
Veillez à bien lire les instructions présentes en commentaires.

Good luck & happy coding !
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made with ❤️ by HelloDev</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/main.js"></script>
</head>

<body>
    <h1 class="text-center py-10">Learn PHP - Step 3</h1>

    <!-- Step 3.1 -->
    <!-- Écrivez le résultat TRUE ou FALSE pour chaque ligne d'instructions ci-dessous.
    -->
    <?php

    $integer = 1;

    $integer > 0 ? true : false;
    // Résultat :

    $integer < 0 ? true : false;
    // Résultat :

    $integer >= 0 ? true : false;
    // Résultat :

    $integer <= 0 ? true : false;
    // Résultat :

    $integer === 0 ? true : false;
    // Résultat :

    $integer === 1 ? true : false;
    // Résultat :

    $integer ? true : false;
    // Résultat :

    !$integer ? true : false;
    // Résultat :

    ?>

    <!-- Step 3.2 -->
    <!-- Écrivez le résultat TRUE ou FALSE pour chaque ligne d'instructions ci-dessous.
    -->
    <?php

    $value = 'value';
    $event = 'event';

    $value and $event ? true : false;
    // Résultat :

    $value or $event ? true : false;
    // Résultat :

    !$value && !$event ? true : false;
    // Résultat :

    $value || $event ? true : false;
    // Résultat :

    ?>

    <!-- Step 3.3 -->
    <!-- Pour chaque instructions ci-dessous, indiquez le résultat final des variables.
    -->
    <?php

    $number = 10;
    echo $number++;
    // Résultat : 

    $enum = 15;
    echo $enum--;
    // Résultat : 

    $title = 'Hello ';
    $title .= ' World !';
    // Résultat : 

    ?>

    <!-- Step 3.4 -->
    <!-- Pour chacune des instructions ci-dessous, indiquez le résultat.
    -->

    <?php

    $foo = 1;
    $bar = 10;

    if ($foo <= $bar) {
        // Some code ...
    }
    // Résultat :


    if ($foo >= $bar) {
        // Some code ...
    }
    // Résultat :


    if ($foo === $bar) {
        // Some code ...
    }
    // Résultat :


    if ($foo && $bar) {
        // Some code ...
    }
    // Résultat :


    if ($foo || $bar) {
        // Some code ...
    }
    // Résultat :


    if (!$foo && $bar) {
        // Some code ...
    }
    // Résultat :


    if (!$foo || !$bar) {
        // Some code ...
    }
    // Résultat :

    ?>

    <!-- Step 3.5 -->
    <!-- Pour chacune des instructions ci-dessous, indiquez le résultat.
    -->

    <?php

    $x = 1;
    $y = 0;

    if ($y >= $x) {
        // Some code ...
    } else {
        // Some code ...
    }
    // Résultat :

    if ($x === $y) {
        // Some code ...
    } elseif ($x >= $y) {
        // Some code ...
    } else {
        // Some code ...
    }
    ?>

    <!-- Step 3.6 -->
    <!-- Pour chacune des instructions ci-dessous, indiquez le résultat.
    -->

    <?php

    $name = 'Acs';
    $zip = 77100;

    if (is_string($name) && is_integer($zip)) {
        // Some code ...
    }
    // Résultat : 

    $collections = [];
    if (!$city && empty($collections)) {
        // Some code ...
    }
    // Résultat :

    isset($name) && isset($zip) ? true : false;
    // Résultat :

    ?>

    <!-- Step 3.7 -->
    <!-- Nous allons maintenant mettre en pratique ce que vous avez appris jusqu'à maintenant.
    Pour commencer, déclarer une fonction APP ONE en SNAKE CASE. Elle aura 2 paramètres qui doivent être typés : TITLE en string et NUMBER en integer.
    Faites deux conditions avec les méthodes IF et ELSE.
    La première condition consiste à écrire avec la méthode ISSET que si les paramètres, TITLE et NUMBER existent, afficher un message success avec ECHO.
    Dans la seconde condition, afficher un message d'erreur avec la méthode ECHO. 
    
    Enfin, lors de l'appel à la fonction, passer deux arguments de votre choix en respectant le typage. Le message app_one doit s'afficher.
    -->

    <?php

    function app_one(string $title, int $number)
    {
        if (isset($title) && isset($number)) {
            echo 'app_one';
        } else {
            echo 'error';
        }
    }
    app_one('a', 1);

    ?>


    <!-- Step 3.8 -->
    <!-- En reprenant le code ci-dessus, déclarer une fonction APP TWO en SNAKE CASE. 
    Le paramètre TITLE prend une valeur par défaut, un string vide.
    Le paramètre NUMBER prend une valeur par défaut, 0.
    Dans le IF, en utilisant la méthode EMPTY remplacer la condition par : si title est vide ou que number n'existe pas, une exception est levée avec la méthode THROW NEW EXCEPTION('ERREUR'). 
    Sinon, faites un print de app_two avec la méthode ECHO.
    Dans le TRY, modifier les arguments de la fonction APP_TWO afin de voir les différents cas.
    -->

    <?php

    // N'oubliez pas de bien décommenter le TRY CATCH.

    // try {
    //     echo app_two();
    // } catch (Exception $e) {
    //     echo 'Caught exception: ',  $e->getMessage();
    // }

    ?>

    <!-- Step 3.9 -->
    <!-- Reprenez le code ci-dessous en déclarant une fonction APP THREE en SNAKE CASE. Ajouter un paramètre de type tableau : COLLECTIONS. Ce paramètre a pour valeur par défaut un tableau vide.
    Assigner au paramètre COLLECTIONS un tableau associatif avec pour clés et valeurs TITLE et NUMBER.
    Dans le IF, ajouter l'instruction : et si COLLECTIONS n'existe pas, lever une exception avec la méthode THROW NEW EXCEPTION();
    Dans le ELSE, faites un VAR_DUMP de COLLECTIONS et un ECHO de TITLE et NUMBER en utilisant la concaténation.
    -->

    <?php

    // N'oubliez pas de bien décommenter le TRY CATCH.

    // try {
    //     app_three();
    // } catch (Exception $e) {
    //     echo $e;
    // }

    // Quelle est la différence entre les deux CATCH des méthodes app_two et app_three ?
    ?>

    <!-- Step 4 -->
    <!--
    Bravo, vous venez de terminer la manipulation des opérateurs et des conditions PHP ! Ils existent encore pleins d'autres méthodes consultables ici :

    Opérateurs : https://www.php.net/manual/en/language.operators.php

    Conditions : https://www.php.net/manual/en/language.control-structures.php

    Gestion des variables : https://www.php.net/manual/en/ref.var.php

    Passons à la suite en vous rendant sur ce lien :

    https://github.com/Lazy974/s4

    Made with ❤️ by HelloDev
    -->

</body>

</html>