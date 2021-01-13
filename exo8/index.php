<!-- ## Exercice 8
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
<?php

$month = array(
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>

<body>

    <ul><?php foreach ($month as $value) { ?>
            <li><?= $value ?></li>
        <?php } ?>
    </ul>


</body>

</html>