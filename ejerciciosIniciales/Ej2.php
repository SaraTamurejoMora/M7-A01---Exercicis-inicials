<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        /*Web que mostra els números del 100 al 0 fent
        servir un bucle for, però els números parells
        en negreta, els senars en cursiva i el 0 en negreta,
        cursiva i subratllat. */
            
        for ($i = 100; $i >= 0; $i--) {
            if ($i == 0) {
                echo "<b><i><u>$i</u></i></b> ";
            } elseif ($i % 2 == 0) {
                echo "<b>$i</b> ";
            } else {
                echo "<i>$i</i> ";
            }
        }

    ?>
    
</body>
</html>