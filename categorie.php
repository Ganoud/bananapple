<!DOCTYPE html>
<html>

<head>
    <?php
    require "headBase.php";
    require "serverUtils.php";
    ?>
    <script src="script.js"></script>
</head>

<body>
    <?php require "menu.php"; ?>
    <h2 class="page-title">
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
    <hr>
    <div class="description">
        <?php
        echo $result["description"];
        ?>
    </div>

    <div class="card-container">
        <?php

        $request = "SELECT * FROM products WHERE category_id=?";
        $statement = $conn->prepare($request);
        $statement->bind_param("s", $categorie);
        $statement->execute();
        $products = $statement->get_result();

        foreach ($products as $product) {
            $name = $product["name"];
            $desc = $product["description"];
            $id = $product["id"];
            $price = $product["price"];
            if ($product["image_path"] == null) {
                $imgUrl = "dossier image/1.jpg";
            } else {
                $imgUrl = $product["image_path"] . "/1.jpg";
            }
            include "card.php";
        }
        ?>
    </div>
</body>