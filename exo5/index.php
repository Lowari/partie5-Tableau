<!-- ## Exercice 5
Créer un tableau associatif avec comme index le numéro des départements de **la Normandie** et en valeur **leurs noms**. -->
<?php

$normandie = array(
    50 => "Manche",
    14 => "Calvados",
    61 => "Orne",
    27 => "Eure",
    76 => "Seine-maritime"
);

var_dump($normandie);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo5</title>
</head>

<body>

    <h1 class="text-center">Département de Normandie</h1>

    <table class="table text-center table-striped text-info mt-4">
        <thead>
            <tr>
                <th scope="col">Numéro de département</th>
                <th scope="col">Département</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($normandie as $key => $value) { ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><?= $value ?></td>
                </tr><?php } ?>
        </tbody>
    </table>

</body>

</html>