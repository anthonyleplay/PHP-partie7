<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>

    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <p>exo2 (Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.)</p>

    <p>===================================</p>

    <form action="/exercice4/user.php" method=post>
        <label for="firstname">Prenom:</label><br>
        <input type="text" id="firstname" name="firstname" value="Aude" required><br>
        <label for="lastname">Nom:</label><br>
        <input type="text" id="lastname" name="lastname" value="Vessel" required><br><br>
        <input type="submit" value="envoyer">
    </form>

</body>

</html>