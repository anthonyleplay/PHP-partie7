

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

    <p>===================================</p>

    <form action="/exercice2/user.php" method=post>
        <label for="firstname">Prenom:</label><br>
        <input type="text" id="firstname" name="firstname" value="Aude" require><br>
        <label for="lastname">Nom:</label><br>
        <input type="text" id="lastname" name="lastname" value="Vessel" require><br><br>
        <input type="submit" value="envoyer">
    </form>


</body>

</html>