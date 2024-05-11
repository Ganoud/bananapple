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
    $request = "SELECT * FROM products WHERE id=25";
    $statement = $conn->prepare($request);
    $statement->execute();
    $product = $statement->get_result()->fetch_assoc();

    ?>

    <div class="testpourlinstan">
        <div class="cart-items-container">
            <div class="cart-item">
                <?php echo $product["name"] ?>
            </div>
        </div>
        <div class="cart-summary">
            <p>Résumé de vos achats :</p>
            <br>
            <?php echo "- " . $product["name"] ?>
            <br><br>
            <p>Total : <?php echo $product["price"] ?> €</p>
        </div>
    </div>
</body>