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
    $productNames = DatabaseGet("SELECT name FROM product_category", $conn);
    foreach ($productNames as $productName) {

        echo "<li><a href='https://localhost:3000/" . $productName['name'] . "'>";

        echo $productName['name'];
    }
    ?>
</ul>