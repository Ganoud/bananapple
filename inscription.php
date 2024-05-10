<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="inscription-box">
        <img src="logopetit.png" alt="">
        <h2 class="form-element">Inscription</h2>
        <form action="inscription_traitement.php" method="post">

            <div class="form-element">
                <label for="email">E-mail :</label><br>
                <input type="email" id="email" name="email" required><br>
            </div>
            <div class="form-element">
                <label for="password">Mot de passe :</label><br>
                <input type="password" id="password" name="password" required><br>
            </div>
            <div class="form-element">
                <input type="submit" value="S'inscrire" class="button">
            </div>
        </form>
    </div>
</body>

</html>