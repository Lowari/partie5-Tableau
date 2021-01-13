<!-- ## Exercice 3
Avec le tableau de l'exercice 1, afficher la valeur de l'index 5. -->
<?php

$months = array(
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 4 | Exerice 3</title>
</head>

<body>

    <h1 class="text-center">Partie 4 : Les tableaux</h1>

    <div class="container-fluid">

        <h2>Consigne exercice 3</h2>

        <p><span class="text-danger fw-bold">Exercice 3</span> : Avec le tableau de l'exercice 1, <span class="fw-bold">afficher la valeur de l'index 5</span>.</p>

        <h3>Application</h3>

        <p>Aucune difficulté ici, nous allons faire comme pour l'exercice 2. Nous avons vu comment afficher grâce à : <span class="fst-italic">echo</span><br>Nous avons vu comment indiquer la <span class="fw-bold">valeur d'un tableau</span> grâce à la <span class="fw-bold">key</span>.<br>L'énnoncé nous donne déjà la <span class="fw-bold">key</span> à afficher, qui est la <span class="fw-bold">key[5]</span>.</p>

        <p>Nous allons donc l'afficher grâce à <span class="fst-italic">echo</span>, ce qui donne le code suivant : <span>echo $months[5];</span><br>Ce qui à doit d'afficher ceci : <span class="fst-italic"><?= $months[5]; ?></span></p>

        <p>Pour vérifier et être sur que tout est bon, nous allons effectuer : <span>var_dump($months[5]);</span><br>Ce qui doit afficher ceci :<?php var_dump($months[5]); ?></p>

        <p><span class="fst-italic">Ignorez : "C:\LearnPhP\Partie5 - Les tableaux\exo3\index.php:45:", elle correspond au chemin de mon fichier et seul celle-çi sera différente de vous. Le reste parcontre doit être identique !</span></p>

        <p>Grâce à cette vérification je m'assure que je ne me suis pas tromper et que <span class="fw-bold">"juin"</span> est bien la <span class="fw-bold">valeur</span>de la <span class="fw-bold">key[5]</span> du <span class="fw-bold">tableau $months</span>.</p>

        <p>=> Bonus, pour former une phrase il suffit de l'integrer où bon vous semble, ex : <span>echo "L'index 5 du tableau correspond à : $months[5].";</span><br>Ce qui affichera : <span class="fst-italic"><?= "L'index 5 du tableau correspond à : $months[5]." ?></span></p>

    </div>

</body>

</html>