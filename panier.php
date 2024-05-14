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
    <?php
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

    $request = "SELECT products.id, products.name as productName, product_category.name as categoryName, products.description, products.price, products.discount, products.image_path FROM products JOIN product_category ON products.category_id=product_category.id WHERE products.id IN ($ids);";
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
                if ($product["image_path"] == null) {
                    $imgUrl = "dossier image/1.jpg";
                } else {
                    $imgUrl = $product["image_path"] . "/1.jpg";
                }
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