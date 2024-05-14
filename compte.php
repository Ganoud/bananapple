<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Compte</title>
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
    <?php
    require "serverUtils.php";
    require "serverUtils.php";
    require "menu.php";
    ?>
    <h2 class="page-title">Connectez-vous</h2>
    <hr>
    <div class="card-container">
        <div class="card">
            <div class="card-content-content">
                <h2 class="card-title">Se connecter</h2>
                <div class="inscription-box">
                    <img src="logopetit.png" alt="">
                    <h2 class="form-element">Connexion</h2>
                    <form action="connexion_traitement.php" method="post">
                        <div class="form-element">
                            <label for="email">
                                <span><i class="fa fa-envelope-o"></i></span> E-mail :
                            </label><br>
                            <input type="email" id="email" name="email" required><br>
                        </div>
                        <div class="form-element">
                            <label for="password">
                                <span><i class="fa fa-unlock-alt"></i></span> Mot de passe :
                            </label><br>
                            <input type="password" id="password" name="password" required><br>
                        </div>
                        <div class="form-element">
                            <input type="submit" value="Se connecter" class="button">
                        </div>
                    </form>
                </div>
            </div>
            <a href="inscription.php" class="a-card">Créer un compte</a>
        </div>
    </div>
</body>