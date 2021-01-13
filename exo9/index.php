<!-- ## Exercice 9
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
<?php

$normandie = array(
    50 => "Manche",
    14 => "Calvados",
    61 => "Orne",
    27 => "Eure",
    76 => "Seine-maritime"
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 | Exercice 9</title>
</head>

<body>

    <ul>
        <?php foreach ($normandie as $value) { ?>
            <li><?= $value; ?></li>
        <?php } ?>
    </ul>


</body>

</html>