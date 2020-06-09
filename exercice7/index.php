<?php
    $hautDeFrance = array(2 => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de-Calais", 80 => "Somme");
    $hautDeFrance[51] = "Marne"; 
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>

<body>
    <h1>Exercice 7</h1>

    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
   

    <p>===================================</p>

    <p><?= $hautDeFrance[51] ?> </p>


</body>

</html>