<?php
    if (isset($_GET['firstname'])){
        $messageFirstname =  $_GET['firstname'];
    }else {
        $messageFirstname = 'il n\'y a pas de parametre d\'URL \'firstname\'';
    };
    if (isset($_GET['lastname'])){
        $messageLastname = $_GET['lastname'];
    }else {
        $messageLastname = 'il n\'y a pas de parametre d\'URL \'lastname\'';
    };
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>
    <h1>Exercice 1</h1>

    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la
        méthode GET.</p>

        <a href="index.php"><span style="background-color: lightblue;">retour</span></a>

    <p>===================================</p>

    <p><?= 'Prenom : ' . $messageFirstname ?> </p>
    <p><?= 'Nom : ' . $messageLastname ?> </p>

</body>

</html>