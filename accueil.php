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

    <div class="card-container">
        <?php
        $request = "SELECT * FROM products";
        $statement = $conn->prepare($request);
        $statement->execute();
        $products = $statement->get_result();

        foreach ($products as $product) {
            $name = $product["name"];
            $desc = $product["description"];
            $id = $product["id"];
            $price = $product["price"];
            $discount = $product["discount"];
            if ($product["image_path"] == null) {
                $imgUrl = "dossier image/1.jpg";
            } else {
                $rand = rand(1, 4);
                $imgUrl = $product["image_path"] . "/" . $rand . ".jpg";
            }
            include "card.php";
        }
        ?>
    </div>

</body>

</html>