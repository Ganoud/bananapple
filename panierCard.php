<div class="cart-item">
    <img src="<?php echo $imgUrl ?>" alt="" class="cart-image">
    <div class="cart-content">
        <div>
            <div class="cart-title"><?php echo $name ?></div>
            <?php echo " - " . substr($desc, 0, 51) . "..." ?>
        </div>
        <div class="quantity">

            <div class="cart-info">
                Quantité :
                <br>
                <button class="amount-button"
                    onclick="addToPanier(<?php echo $productId . ', ' . $amount - 1 ?>, true)">-</button>

                <?php echo $amount ?>
                <button class="amount-button"
                    onclick="addToPanier(<?php echo $productId . ', ' . $amount + 1 ?>, true)">+</button>
            </div>
        </div>
        <div class="cart-info">
            Prix :
            <br>
            <?php echo $price . "€" ?>
        </div>
    </div>
</div>