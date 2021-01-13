<!-- ## Exercice 10
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département** -->
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
    <title>Partie 4 | Exercice 10</title>
</head>

<body>

    <?php foreach ($normandie as $key => $value) { ?>
        <p>Le département <?= $value ?> a le numéro <?= $key ?>.</p>
    <?php } ?>

</body>

</html>