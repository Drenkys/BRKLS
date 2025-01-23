window.addEventListener('DOMContentLoaded', function() {
    reveal(); // Spustí reveal() po načtení stránky

    window.addEventListener('scroll', reveal);

    function reveal(){
        var reveals = document.querySelectorAll('.scroll');
        for(var i = 0; i < reveals.length; i++) {
            var window_height = window.innerHeight;
            var reveal_top = reveals[i].getBoundingClientRect().top;
            var reveal_point = 150;

            if(reveal_top < window_height - reveal_point){
                reveals[i].classList.add('active');
            }
            else{
                reveals[i].classList.remove('active');
            }
        }
    }
});

//Načtení obsahu 0.5s po načtení stránky (PRO HORNÍ OBSAH)

document.addEventListener('DOMContentLoaded', function() {
    var boxes = document.getElementsByClassName('start_scroll');
    setTimeout(function() {
        for (var i = 0; i < boxes.length; i++) {
            boxes[i].classList.add('active2');
        }
    }, 500); // Zpoždění spuštění animace o 500 ms (0.5 sekundy)
});
