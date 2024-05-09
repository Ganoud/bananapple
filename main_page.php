<!DOCTYPE html>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
        centerSlides();
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
        centerSlides();
    }

    function centerSlides() {
        var slides = document.getElementsByClassName("custom-slider");
        for (var i = 0; i < slides.length; i++) {
            var slide = slides[i];
            var image = slide.querySelector(".slide-img");
            image.style.marginLeft = (slide.offsetWidth - image.offsetWidth) / 2 + "px";
            image.style.marginTop = (slide.offsetHeight - image.offsetHeight) / 2 + "px";
        }
    }


    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("custom-slider");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

<html>

<head>
    <meta charset="utf-8">
    <title>Banana</title>
    <link rel="icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require ("general.php");
    require ("menu.php");
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

</body>

</html>