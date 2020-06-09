<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4 user</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <p>exo2 (Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.)</p>

    <a href="index.php"><span style="background-color: lightblue;">retour</span></a>

    <p>===================================</p>

    <p><?= 'Prenom : ' . $_POST["firstname"] ?> </p>
    <p><?= 'Nom : ' . $_POST["lastname"] ?> </p>

</body>

</html>