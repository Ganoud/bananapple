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
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">

    <script src="script.js"></script>
</head>

<body>
    <?php
    require "general.php";
    require "menu.php";
    ?>
    <h2 class="page-title">Votre panier</h2>
    <hr>

    <?php
    session_start();

    if (empty($_SESSION["panier"])) {
        echo "<p class='page-title page-subtitle'>Votre panier est vide</p>";
        return;
    }

    $ids = implode(',', array_keys($_SESSION["panier"]));

    $request = "SELECT products.id,     products.name as productName, product_category.name as categoryName, products.description, products.price, products.discount FROM products JOIN product_category ON products.category_id=product_category.id WHERE products.id IN ($ids);";
    $statement = $conn->prepare($request);
    $statement->execute();
    $products = $statement->get_result();
    ?>

    <div class="testpourlinstan">
        <div class="cart-items-container">
            <?php
            foreach ($products as $product) {
                $productId = $product["id"];
                $name = $product["productName"];
                $desc = $product["description"];
                $price = $product["price"];
                $discount = $product["discount"];
                $categorie = $product["categoryName"];
                $amount = $_SESSION["panier"][$product["id"]];
                include "panierCard.php";
            }
            ?>
        </div>
        <div class="summary-collumn">
            <div class="cart-summary">
                <p>Résumé de vos achats :</p>
                <br>
                <?php
                $total = 0;
                foreach ($products as $product) {
                    $amount = $_SESSION["panier"][$product["id"]];
                    echo "- " . $product["productName"] . " x" . $amount . "<br>";
                    $total += $product["price"] * $amount;
                }
                ?>
                <br>
                <p>Total : <?php echo $total ?> €</p>
            </div>
        </div>
    </div>
</body>