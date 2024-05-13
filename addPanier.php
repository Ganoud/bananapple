<?php

require "general.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le panier existe dans la session
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = array(); // Initialiser le panier s'il n'existe pas encore
    }
    // Lire les données JSON de la requête
    $jsonData = file_get_contents('php://input');
    // Décoder les données JSON en un tableau associatif
    $postData = json_decode($jsonData, true);

    // Récupérer l'ID de l'article à ajouter
    $productId = $postData['productId'];
    $amount = $postData['amount'];

    // Ajouter l'ID de l'article au panier
    for ($i = 0; $i < $amount; $i++) {
        $_SESSION["panier"][] = $productId;
    }

    echo "Item successulfy added";
} else {
    echo "Not a post request";
}