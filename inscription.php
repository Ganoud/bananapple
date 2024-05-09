<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>

<body>
    <h2>Inscription</h2>
    <form action="inscription_traitement.php" method="post">

        <label for="email">E-mail :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>

</html>