
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

function openModal(productName, productPrice, images) 
{
    var modal = document.getElementById('MyModal');
    var carousel = document.getElementById('carousel');
    var thumbnailsContainer = document.querySelector('.carousel-thumbnails');
    var productNameElement = document.getElementById('productName');
    var productPriceElement = document.getElementById('productPrice');

    // Mettre à jour le contenu du modal
    productNameElement.innerText = productName;
    productPriceElement.innerText = 'Prix: ' + productPrice + ' €';
    carousel.innerHTML = '';
    thumbnailsContainer.innerHTML = '';

    // Ajouter les images au carousel et les vignettes
    images.forEach(function(image, index) {
        var carouselItem = document.createElement('div');
        carouselItem.classList.add('.carousel-item');
        carouselItem.innerHTML = '<img src="' + image + '" alt="Image ' + (index + 1) + '">';
        if (index === 0)w 
        {
            carouselItem.classList.add('active');
        }
        

        var thumbnail = document.createElement('img');
        thumbnail.src = image;
        thumbnail.alt = 'Image ' + (index + 1);
        thumbnail.onclick = function() 
        {
            showImage(index);
        };
        thumbnailsContainer.appendChild(thumbnail);

        carousel.appendChild(carouselItem);
    });

    modal.style.display = 'block';
}

// Fonction pour fermer le modal
function closeModal() 
{
    var modal = document.getElementById('MyModal');
    modal.style.display = 'none';
}

// Fonction pour afficher une image spécifique dans le carousel
function showImage(index) 
{
    var carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems.forEach(function(item, i) {
        if (i === index) 
        {
            item.classList.add('active');
        } else 
        {
            item.classList.remove('active');
        }
    });
}

