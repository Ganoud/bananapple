<div class="pagetop">
    <div>
        <img src="logopetit.png" alt="imagelogo">
    </div>
    <div>
        <h1 class="titre">Banana</h1>
    </div>
</div>
<ul class="nav">
    <?php
    $productNames = DatabaseGet("SELECT id, name FROM product_category", $conn);
    foreach ($productNames as $productName) {

        echo "<li><a href='http://localhost:3000/categorie.php?categorie=" . $productName['id'] . "'>";

        echo $productName['name'];
        echo "</a></li>";
    }
    ?>
</ul>