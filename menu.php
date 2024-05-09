<a href="<?php $base_url ?>/accueil.php">
    <div class="pagetop">
        <img src="logopetit.png" alt="imagelogo">
        <h1 class="title">Banana</h1>
    </div>
</a>
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