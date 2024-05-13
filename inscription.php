<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
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