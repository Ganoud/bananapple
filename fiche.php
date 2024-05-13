<!DOCTYPE html>
<html>

<head>
    <?php
    require "headBase.php";
    require "serverUtils.php";
    ?>
</head>

<body>
    <?php
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