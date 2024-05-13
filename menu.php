<div class="pagetop">
    <a href="<?php echo $base_url . "accueil.php" ?>" class="logoAndName">
        <img src="logopetit.png" alt="imagelogo">
        <h1 class="title">Banana</h1>
    </a>
    <div class="header-buttons">
        <button class="header-button" onclick=>
            <i class="fa fa-user-o fa-lg" aria-hidden="true"></i>Se connecter
        </button>
        <button class="header-button">
            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>Panier
        </button>
        <button class="header-button">
            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>Contact
        </button>
    </div>
</div>
<ul class="nav">
    <?php
    $products = DatabaseGet("SELECT id, name FROM product_category", $conn);
    foreach ($products as $product) {

        echo "<li class='menu'><a href='" . $base_url . "categorie.php?categorie=" . $product['id'] . "'>";

        echo $product['name'];
        echo "</a></li>";
    }
    ?>
</ul>