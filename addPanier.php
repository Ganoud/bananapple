<?php

require "general.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le panier existe dans la session
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array(); // Initialiser le panier s'il n'existe pas encore
    }

    // Récupérer l'ID de l'article à ajouter
    $id = $_POST['id'];

    // Ajouter l'ID de l'article au panier
    $_SESSION["panier"][] = $id;
    echo "Item successulfy added";
} else {
    echo "Not a post request";
}