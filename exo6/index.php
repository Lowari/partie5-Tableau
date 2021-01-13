<!-- ## Exercice 6
Avec le tableau de l'exercice 5, afficher la valeur de l'index 76. -->
<?php

$normandie = array(
    50 => "Manche",
    14 => "Calvados",
    61 => "Orne",
    27 => "Eure",
    76 => "Seine-maritime"
);

var_dump($normandie[76]);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo6</title>
</head>

<body>

    <table class="table text-center table-striped text-info">
        <thead>
            <tr>
                <th scope="col">Numéro de département</th>
                <th scope="col">Département</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?= array_search("Seine-maritime", $normandie) ?></th>
                <td><?= $normandie[76] ?></td>
            </tr>
    </table>

</body>

</html>