<!-- ## Exercice 2
Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
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
    <title>Partie 4 | Exercice 2</title>
</head>

<body>

    <h1 class="text-center">Partie 4 : Les tableaux</h1>

    <div class="container-fluid">

        <h2>Consigne exercice 2</h2>

        <p><span class="text-danger fw-bold">Exercice 2</span> : Avec le tableau de l'exercice 1, <span class="fw-bold">afficher la valeur</span> de la <span class="fw-bold">troisième ligne de ce tableau.</span></p>

        <h2>Application</h2>

        <p>Pour afficher la <span class="fw-bold">valeur</span> d'un tableau, il suffit de mentionner son <span class="fw-bold">index</span>, dans le jargon du développement on appelera ça : <span class="fw-bold">key</span>.<br>Ici, nous savons qu'il faut afficher la <span class="fw-bold">3 ième valeur</span> du <span class="fw-bold">tableau</span>, nous savons également qu'un <span class="fw-bold">tableau commence à l'index [0]</span>.<br>Il faudra donc donner la <span class="fw-bold">key[2]</span> qui représentra : mars</p>

        <p>Pour nous en assurer et vérifier ce que je viens de dire on peut faire un : <span class="fst-italic">var_dump($months);</span> ce qui nous affiche ceci :<br><?php var_dump($months); ?></p>

        <p><span class="fst-italic">Ignorez la première ligne : "C:\LearnPhP\Partie5 - Les tableaux\exo2\index.php:45:", elle correspond au chemin de mon fichier et seul celle-çi sera différente de vous. Le reste parcontre doit être identique !</span></p>

        <p>Nous pouvons vite voir que <span class="fst-italic">"mars"</span> est la <span class="fw-bold">3 ième valeur du tableau</span> qui à pour <span class="fw-bold">key[2]</span>.</p>

        <p>Maintenant que nous savons tous ça il nous suffit juste de l'afficher. Rien de plus simple, en PHP pour afficher un élèment nous utilisons : <span class="fst-italic">echo</span>.<br> Nous allons donc appeler le <span class="fw-bold">tableau</span> en mentionnant la <span class="fw-bold">key de la valeur</span> qui nous intéresse. En code ça donne ceci : <span class="fst-italic">echo $months[2]</span><br>Ce qui à pour but d'afficher ceci :<span class="fst-italic"> <?= $months[2]; ?></span></p>

        <p>=> Bonus, pour former une phrase il suffit de l'integrer où bon vous semble, ex : <span>echo "Le troisème éléments du tableau est : $months[2].";</span><br>Ce qui affichera : <span class="fst-italic"><?= "Le trosième éléments du tableau est : $months[2]." ?></span></p>

    </div>

</body>

</html>