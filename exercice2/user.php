<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>

    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>

        <a href="index.php"><span style="background-color: lightblue;">retour</span></a>

    <p>===================================</p>

    <p><?= 'Prenom : ' . $_POST["firstname"] ?> </p>
    <p><?= 'Nom : ' . $_POST["lastname"] ?> </p>

</body>

</html>