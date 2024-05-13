<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    require "headBase.php";
    ?>
</head>

<body>
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
</body>