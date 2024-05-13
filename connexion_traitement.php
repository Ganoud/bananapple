<?php

require ("general.php");
// Vérifier si tout a ete saisi

// Vérifiez si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($passowrd, PASSWORD_DEFAULT);

    $requete = "SELECT email, password FROM users WHERE email=?";
    $statement = $conn->prepare($requete);
    $statement->bind_param("s", $email)
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($hashed_password, $user['password']))
    {
        $_SESSION['email'] = $email;

        header("Location: " . $base_url, "acceuil.php");
        exit();
    }
    else
    {
        echo "Adresse e-mail ou mot de passe incorrect.";
    }




    $statement->close();
    $connexion->close();
}
?>