<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Banana</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    require "general.php";
    require "menu.php";
    ?>
    <!-- 
    FAIRE FICHE PRODUIT
    ENLEVER CE QUI EST EN DESSOUS
-->
    <div class="card-container">
        <div class="card">
            <div class="card-image"></div>
            <div class="card-content">
                <h2 class="card-title">BiPad</h2>
                <p class="card-description">Description de la carte.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-image"></div>
            <div class="card-content">
                <h2 class="card-title">BiWatch</h2>
                <p class="card-description">Description de la carte.</p>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="MyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="carousel" class="carousel">
                <div class="carousel-item active">
                    <img src="phone1.jpg" alt="Telephone 1">
                </div>
                <div class="carousel-item active">
                    <img src="phone2.jpg" alt="Telephone 2">
                </div>
                <div class="carousel-item active">
                    <img src="phone3.jpg" alt="Telephone 3">
                </div>
            </div>
            <div class="carousel-thumbnails">

            </div>
            <div class="product-info">
                <h2 id="productName">Nom du produit</h2>
                <p id="productPrice">Prix du produit</p>
            </div>
        </div>
    </div>


</body>