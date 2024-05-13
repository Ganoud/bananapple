<!DOCTYPE html>
<html>

<head>
    <?php
    require "headBase.php";
    require "serverUtils.php";
    ?>
</head>

<body>
    <?php require "menu.php"; ?>
    <!--Slidehow-->

    <div class="slide-container">
        <div class="custom-slider fade">
            <div class="slide-index">1 / 3</div>
            <img class="slide-img" src="iphone7.jpg">
            <div class="slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="custom-slider fade">
            <div class="slide-index">2 / 3</div>
            <img class="slide-img" src="iphonex.jpg">
            <div class="slide-text">Nullam luctus aliquam ornare. </div>
        </div>
        <div class="custom-slider fade">
            <div class="slide-index">3 / 3</div>
            <img class="slide-img" src="iphone14.jpg">
            <div class="slide-text">Praesent lobortis libero sed egestas suscipit.</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div class="slide-dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="card-container">
        <?php
        $request = "SELECT * FROM products";
        $statement = $conn->prepare($request);
        $statement->execute();
        $products = $statement->get_result();

        foreach ($products as $product) {
            $name = $product["name"];
            $desc = $product["description"];
            include "card.php";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>

</html>