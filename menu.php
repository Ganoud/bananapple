<div class="pagetop">
    <a href="<?php echo $base_url . "accueil.php" ?>" class="logoAndName">
        <img src="logopetit.png" alt="imagelogo">
        <h1 class="title">Banana</h1>
    </a>
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