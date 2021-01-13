<!-- ## Exercice 1
Créer un tableau **months** et l'initialiser avec les valeurs suivantes :
- **janvier**
- **février**
- **mars**
- **avril**
- **mai**
- **juin**
- **juillet**
- **aout**
- **septembre**
- **octobre**
- **novembre**
- **décembre** -->
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
    <title>Partie 4 | Exercice 1</title>
</head>

<body>

    <div class="container-fluid">
        <h1 class="text-center">Partie 4 : Les tableaux</h1>

        <h2>Consigne exercice 1</h2>

        <p><span class="text-danger fw-bold">Exercice 1</span> : Créer un tableau <span class="fw-bold">**months**</span> et <span class="fw-bold">l'initialiser</span> avec les valeurs suivantes :<br>
            - janvier<br>
            - février<br>
            - mars<br>
            - avril<br>
            - mai<br>
            - juin<br>
            - juillet<br>
            - aout<br>
            - septembre<br>
            - octobre<br>
            - novembre<br>
            - décembre</p>

        <h3>Application</h3>

        <p>Ici l'exercice ne nous demande pas de préciser l'index de chaque valeur, on va donc utiliser :<span class="fw-bold"> un tableau indexé </span>. Php lui donnera un index par défaut. <span class="fst-italic">(Voir un peu plus loin)</span></p>
        <p>En php pour déclarer un tableau il faut utiliser la fonction :<span class="fst-italic"> array( );</span> <br>L'exercice nous demande d'appeller le tableau <span class="fw-bold">months</span>, donc le code aura cette aspect : <span class="fst-italic">$months = array();</span></p>

        <p>Maintenant que notre tableau a un nom : <span class="fw-bold">months</span>, et que le tableau est declaré : <span class="fw-bold">array( )</span>, il faut maintenant remplir le tableau de nos <span class="fw-bold">valeurs</span>.<br> Pour ajouter des valeurs il faut écrire entre les parenthèses de <span class="fw-bold">array( )</span>, séparé par une virgule pour chaque valeur.<br>Notre code finale aura donc cette aspect : <span class="fst-italic">$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");</span></p>

        <p>Enfin, pour vérifier si tout es bon, utilisez la fonction : <span class="fw-bold">var_dump()</span>, comme ceci : <span class="fst-italic">var_dump($months);</span><br>Si tous fonctionne correctement, vous devriez voir afficher ceci : <br> <?php var_dump($months); ?> </p>

        <p><span class="fst-italic">Ignorez la première ligne : "C:\LearnPhP\Partie5 - Les tableaux\exo2\index.php:45:", elle correspond au chemin de mon fichier et seul celle-çi sera différente de vous. Le reste parcontre doit être identique !</span></p>

        <p>Comme dit précédemment,<span class="fw-bold"> PHP donne par défault un index</span>, ci-dessus vous pouvez voir des nombres suivit d'une fléche "=>", le nombre correspond à <span class="fw-bold">l'index que PHP lui a donné</span>.<br>Nous savons donc qu'a <span class="fw-bold">l'index[0]</span> ce trouve la valeur <span class="fw-bold">"janvier"</span>, à <span class="fw-bold">l'index[1]</span> ce trouve la valeur <span class="fw-bold">"février"</span> etc. <br>Merci PHP !</p>

    </div>

</body>

</html>