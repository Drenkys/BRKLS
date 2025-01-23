var slideIndex = 0;
var modal = document.getElementById("myModal");

function openModal(index) {
    slideIndex = index;
    showSlides(slideIndex);
    modal.style.display = "flex";

    // Přidání posluchače událostí pro kliknutí mimo obrázek
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }
}

function closeModal() {
    modal.style.display = "none";
    resetThumbnails();
}
function resetThumbnails() {
    var slides = document.getElementsByClassName("thumbnails_img");
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "block";
    }
}

function plusSlides(n) {
    slideIndex += n;
    showSlides(slideIndex);
}

function currentSlide(n) {
    slideIndex = n;
    showSlides(slideIndex);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("thumbnails_img");
    var modalThumbnails = document.getElementsByClassName("modal-thumbnails");
    if (n >= slides.length) {slideIndex = 0;}
    if (n < 0) {slideIndex = slides.length - 1;}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";

    // Nastavení src atributu pro obrázek v modálním okně
    var modalImg = document.getElementById("modalImg");
    var mainImage = slides[slideIndex].querySelector("img");
    if (mainImage) {
        modalImg.src = mainImage.src; // Použijeme cestu k obrázku z hlavního obrázku
    } else {
        // Pokud hlavní obrázek není k dispozici, použijeme obrázek z první miniatury galerie
        var firstThumbnailImage = slides[0].querySelector("img");
        if (firstThumbnailImage) {
            modalImg.src = firstThumbnailImage.src;
        }
    }

    // Zobrazení miniatur v modálním okně
    modalThumbnails[0].innerHTML = "";
    for (i = 0; i < slides.length; i++) {
        var thumbnailImage = slides[i].querySelector("img");
        if (thumbnailImage) {
            modalThumbnails[0].innerHTML += '<img class="modal-thumbnail" src="' + thumbnailImage.src + '" onclick="currentSlide(' + i + ')">';
        }
    }
}
