<div class="pagetop">
    <a href="<?php echo $base_url . "accueil.php" ?>" class="logoAndName">
        <img src="logopetit.png" alt="imagelogo">
        <h1 class="title">Banana</h1>
    </a>
    <div class="header-buttons">
        <div>
            <a href=<?php echo $base_url . "connexion.php" ?> class="btn">
                <i class="fa fa-user-o"></i>
            </a>
            <a href=<?php echo $base_url . "panier.php" ?> class="button">
                <i class="fa fa-shopping-cart"></i>
            </a>
            <a href=<?php echo $base_url . "contact.php" ?> class="btn">
                <i class="fa fa-mobile fa-lg"></i>
            </a>
        </div>
    </div>
</div>
<ul class="nav">
    <?php
    $request = "SELECT id, name FROM product_category";
    $statement = $conn->prepare($request);
    $statement->execute();
    $products = $statement->get_result();
    foreach ($products as $product) {

        echo "<li class='menu'><a href='" . $base_url . "categorie.php?categorie=" . $product['id'] . "'>";

        echo $product['name'];
        echo "</a></li>";
    }
    ?>
</ul>