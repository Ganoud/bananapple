<div class="card">
    <div class="card-image"><img src="<?php echo $imgUrl ?>" alt=""></div>
    <div class="card-content">
        <h2 class="card-title"><?php echo $name ?></h2>
        <p class="card-description"><?php echo $desc ?></p>
        <div>
            <button onclick="OpenModal();addToPanier(<?php echo $id ?>, 1, )" class="fancyButton">Ajouter au
                panier</button>
            <?php echo $price . "€" ?>
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