<div class="card">
    <div class="card-image"><img src="<?php echo $imgUrl ?>" alt=""></div>
    <div class="card-content">
        <h2 class="card-title"><?php echo $name ?></h2>
        <p class="card-description"><?php echo $desc ?></p>
        <div>
            <button onclick="OpenModal();addToPanier(<?php echo $id ?>, 1, )" class="fancyButton">Ajouter au
                panier</button>

            <?php
            if ($discount == null) {
                echo "<span>" . $price . "€</span>";
            } else {
                echo "<span class='discount'>" . $price . "€</span>  <span>" . round($price * (1 - ($discount / 100)), 2) . "€";
            }
            ?>
        </div>

    </div>
</div>

<div class="modal" id="1">
    <div class="modal-content">
        <span class="close" onclick="CloseModal()">&times;</span>
        <p>Votre produit a été ajouté au panier !</p>
        <button onclick="ViewCart()" class="fancyButton">Voir mon panier</button>
    </div>
</div>