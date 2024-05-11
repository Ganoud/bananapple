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
    <h2 class="page-title">Votre panier</h2>
    <hr>

    <?php
    $ids = array(27, 45, 39);
    $id_list = implode(',', $ids);

    $request = "SELECT * FROM products WHERE id IN ($id_list);";
    $statement = $conn->prepare($request);
    $statement->execute();
    $products = $statement->get_result();
    ?>

    <div class="testpourlinstan">
        <div class="cart-items-container">
            <?php
            foreach ($products as $product) {
                include "card-temp.php";
            }
            ?>
        </div>
        <div class="cart-summary">
            <p>Résumé de vos achats :</p>
            <br>
            <?php
            $total = 0;
            foreach ($products as $product) {
                echo "- " . $product["name"] . "<br>";
                $total += $product["price"];
            }
            ?>
            <br>
            <p>Total : <?php echo $total ?> €</p>
        </div>
    </div>
</body>