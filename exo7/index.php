<!-- ## Exercice 7
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de **la ville de Rennes**. -->
<?php

$departement = array(
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Exo 7</title>
</head>

<body>

    <h1 class="text-center">Tableau sans ajout</h1>


    <table class="table table-striped text-center text-info">
        <thead>
            <tr>
                <th scope="col">Numéro de département</th>
                <th scope="col">Département</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departement as $key => $value) { ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><?= $value ?></td>
                </tr><?php } ?>
        </tbody>

    </table>
    <span>Tableau afficher en php :</span>
    <?php var_dump($departement); ?>

    <h1 class="text-center">Ligne à ajouter au tableau</h1>

    <?php $departement[35] = "Ille-et-Vilaine"; ?>

    <table class="table text-center table-striped text-info">
        <thead>
            <tr>
                <th scope="col">Numéro de département</th>
                <th scope="col">Département</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?= array_search("Ille-et-Vilaine", $departement) ?></th>
                <td><?= $departement[35] ?></td>
            </tr>
        </tbody>
    </table>

    <span>Valeur du tableau afficher en PHP:</span>
    <?php var_dump($departement[35]);?>

    <span>Index du tableau afficher en PHP:</span>
    <?php var_dump(array_search("Ille-et-Vilaine", $departement)); ?>

    <h1 class="text-center">Tableau finale</h1>

    <table class="table text-center table-striped text-info">
        <thead>
            <tr>
                <th scope="col">Numéro de département</th>
                <th scope="col">Département</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departement as $key => $value) { ?>
            <tr>
                <th scope="row"><?= $key ?></th>
                <td><?= $value ?></td>
            </tr><?php } ?>
        </tbody>
    </table>
            
    <span>Tableau en PHP :</span>
    <?php var_dump($departement) ?>

</body>

</html>