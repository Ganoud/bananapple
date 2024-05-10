<?php

require ("general.php");
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hasher le mot de passe (pour des raisons de sécurité)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Préparer et exécuter la requête pour insérer l'utilisateur dans la base de données
    $requete = "INSERT INTO users (email, password) VALUES (?, ?)";
    $statement = $conn->prepare($requete);
    $statement->bind_param("ss", $email, $hashed_password);

    if ($statement->execute()) {
        //la connexion à réussi
        //TODO: connecter l'utilisate
        header("Location:" . $base_url . "accueil.php");
    } else {
        echo "Erreur lors de l'inscription.";
    }

    // Fermer la connexion et les requêtes
    $statement->close();
    $connexion->close();
}
