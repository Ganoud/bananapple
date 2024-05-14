<!DOCTYPE html>
<html>

<head>
    <?php
    require "headBase.php";
    require "serverUtils.php"
        ?>
    <script src="script.js"></script>
</head>

<body>
    <?php require "menu.php"; ?>

    <h1 class="page-title">Nous contacter</h1>
    <hr>

    <div class="contact-container">
        <div>
            <h2 class="contact-title">Informations de contact : </h2>
            <p><strong>Email :</strong> contact@banana.com</p>
            <p><strong>Adresse postale :</strong> 123 Rue des Bananes, 75000 Banana City</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
        </div>
        <div>
            <h2 class="contact-title">Formulaire de contact : </h2>
            <form action="form_contact.php" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message :</label><br>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>


    <!-- Intégration de la carte Google Maps -->
    <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=esgi+(ESGI)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            width="100%" height="600" frameborder="0"><a href="https://www.gps.ie/">gps devices</a></iframe></div>
</body>

</html>
</body>