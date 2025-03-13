<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        /*Web que mostra els números de l’1 al 10,
        fent que cada número sigui un hipervincle a
        la pàgina corresponent de la Vikipèdia:*/

        for ($i = 1; $i <= 10; $i++) {
            $urlWiki = "https://es.wikipedia.org/wiki/$i";
            echo "$i -> <a href='$urlWiki' target='_blank'>$urlWiki</a><br>";
        }


    ?>
    
</body>
</html>  