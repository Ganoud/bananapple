<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Catégorie</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require "general.php";
    require "menu.php";
    ?>
    <h2 class="cat-title">
        <?php
        if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
        }
        $request = "SELECT name, description FROM product_category WHERE id=?";
        $statement = $conn->prepare($request);
        $statement->bind_param("s", $categorie);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();

        echo $result["name"];
        ?>
    </h2>
    <div class="description">
        <?php
        echo $result["description"];
        ?>
    </div>

    <div class="card-list">
        <?php

        $request = "SELECT * FROM products WHERE category_id=?";
        $statement = $conn->prepare($request);
        $statement->bind_param("s", $categorie);
        $statement->execute();
        $products = $statement->get_result();

        foreach ($products as $product) {
            // show card for each product
        }
        ?>
    </div>
</body>