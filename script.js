
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

