<!-- ## Exercice 4
Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant. -->
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
    <title>Partie 4 | Exercice 4</title>
</head>

<body>

    <div class="container-fluid">

        <h1 class="text-center">Partie 4 : Les tableaux</h1>

        <h2>Consigne exercice 4</h2>

        <p><span class="fw-bold text-danger">Exercice 4</span> : Avec le tableau de l'exercice 1, <span class="fw-bold">modifier le mois de **aout**</span> pour lui <span class="fw-bold">ajouter l'accent</span> manquant.</p>

        <h3>Application</h3>

        <p>Pour réaliser cette exercice il faut procédé avec étape. La <span class="fw-bold">première étape</span> consiste à repérer à quel <span class="fw-bold">key</span> correspond le mois <span class="fw-bold">aout</span> dans le <span class="fw-bold">tableau</span>.</p>

        <p>Pour ce faire et en être sûr, nous allons faire un : <span class="fst-italic">var_dump($months);</span><br>Vous devriez voir affichez ceci : <?php var_dump($months); ?></p>

        <p><span class="fst-italic">Ignorez la première ligne : "C:\LearnPhP\Partie5 - Les tableaux\exo4\index.php:44:", elle correspond au chemin de mon fichier et seul celle-çi sera différente de vous. Le reste parcontre doit être identique !</span></p>

        <p>Ici nous pouvons clairement voir que <span class="fw-bold">aout</span> a pour <span class="fw-bold">key[7]</span>.<br>A noter qu'il n'étais pas focément nécéssaire de faire un <span class="fst-italic">vardump($months)</span>, on sais que aout et le 8 ième mois de l'année et qu'un tableau commence à 0 donc par déduction ceci décale de 1 la position de aout, par conséquent il ce retrouve à la 7iéme position.<br>Mais si vous n'êtes pas encore à l'aise avec ça, <span class="fst-italic">var_dump($months)</span> est là pour vous aider, alors utlisé le !</p>

        <p>Maintenant que nous savons que <span class="fw-bold">aout</span> ce situe à la <span class="fw-bold">key[7]</span>, nous allons pouvoir passer à <span class="fw-bold">l'étape 2 : ajouter l'accent manquant</span>.<br>Pour ce faire rien de plus simple, il nous suffit de préciser le nom du <span class="fw-bold">tableau</span>, ici : <span class="fst-italic">$months</span>, lui indiquer la <span class="fw-bold">key</span> de la valeur à modifier, ici : <span class="fst-italic">[7]</span> , et enfin procédé à l'ajout de l'accent manquant.<br>En code ça donne ça : <span class="fst-italic">$months[7] = "août"; </span></p>

        <?php $months[7] = "août"; ?>

        <p>Pour s'assurer de la modification on fait un petit : <span class="fst-italic">var_dump($months[7]);</span><br>Ce qui doit afficher ceci : <?php var_dump($months[7]); ?></p>

        <p>Ici nous voyons visuellement que le changement a été fait. Contrat validé. BRAVO !!</p>

        <p>=> Info complémentaire : on peut ce servir de cette méthode pour modifier totalement la valeur de la <span class="fw-bold">key</span> si on le souhaite. Ici l'exercice ne nous le demandé pas mais si on voulais changer <span class="fw-bold">aout</span> par <span class="fw-bold">tractopelle</span>, on aurais écrit : <span class="fst-italic">$months[7] = "tractopelle" ;<?php $months[7] = "tractopelle"; ?></span><br>Regardez, maintenant si on fait un var_dump du tableau $months ça donne ceci : <?php var_dump($months); ?></p>

        <p>On peut voir que la valeur a changé. Ca ne sert a rien de le faire dans cette exercice, mais il est <span class="text-danger fw-bold">important de savoir</span> comment ça fonctionne. En réalité en faisant : <span>$months[7] = </span>, on lui enléve toute ça valeur initial qui est : <span class="fst-italic">aout</span> et on lui injecte ensuite une nouvelle valeur qui est : <span class="fst-italic">août</span>. <br>Pour conclure, gardez en tête qu'en faisant comme ceci vous ne modifié pas un accent, mais vous en modifié toute ça valeur !</p>

        <?php $months[7] = "août"; ?>

    </div>


</body>

</html>