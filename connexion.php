<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-d4A/fq2sQ7dBP9bK/FDbcT9DZKG4c6Jz79u0n+9Cbiv/8x1x0TTfIYqoZRwOqhGzV+45p+XP+3sY8uCqv2vQTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="inscription-box">
        <img src="logopetit.png" alt="">
        <h2 class="form-element">Connexion</h2>
        <form action="inscription_traitement.php" method="post">

            <div class="form-element">
            <ul class="fa-ul">
                <li><i class="fa-li fa fa-check-square"></i>List icons</li>
            </ul>
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