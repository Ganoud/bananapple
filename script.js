
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


function addToPanier(n) {
    console.log("insh");
    // Créer une nouvelle requête AJAX
    var xhr = new XMLHttpRequest();

    // Spécifier le type de requête et l'URL du fichier PHP
    xhr.open('POST', 'addPanier.php', true);

    // Définir le type de contenu de la requête envoyée
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Définir ce qui se passe lors de la fin de la requête
    xhr.onload = function () {
        // Vérifier si la requête s'est bien déroulée
        if (xhr.status === 200) {
            // Afficher la réponse du serveur dans la console
            console.log("response :")
            console.log(xhr.responseText);
        } else {
            // Afficher un message d'erreur si la requête a échoué
            console.log("oupsi");
            console.error('La requête a échoué. Statut de la réponse : ' + xhr.status);
        }
    };

    // Récupérer des données que vous souhaitez envoyer au fichier PHP
    var dataToSend = 'id=' + n;

    // Envoyer les données
    xhr.send(dataToSend);
    console.log("ça a marché");
}

function test() {
    console.log("coucou");
}