<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmises.</p>
    <p>exo1 (Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la
        méthode GET.)</p>

    <p>===================================</p>

    <form action="/exercice3/user.php" method=get>
        <label for="firstname">Prenom:</label><br>
        <input type="text" id="firstname" name="firstname" value="Aude" required><br>
        <label for="lastname">Nom:</label><br>
        <input type="text" id="lastname" name="lastname" value="Vessel" required><br><br>
        <input type="submit" value="envoyer">
    </form>

</body>

</html>