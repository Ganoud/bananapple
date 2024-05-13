<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Banana</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require "general.php";
    require "menu.php";
    ?>
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
            // show card for each product
            $name = $product["name"];
            $desc = $product["description"];
            include "card.php";
            //echo "<p>" . $product["name"] . "</p>";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>

</html>