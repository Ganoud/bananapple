<?php

require "serverUtils.php";
// Vérifier si tout a ete saisi

// Vérifiez si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    $requete = "SELECT email, password, id FROM users WHERE email=?";
    $statement = $conn->prepare($requete);
    $statement->bind_param("s", $email);
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['userId'] = $user["id"];
        $_SESSION["connected"] = true;

        header("Location: " . $base_url . "accueil.php");
        exit();
    } else {
        echo "Adresse e-mail ou mot de passe incorrect.";
    }




    $statement->close();
    $connexion->close();
}
