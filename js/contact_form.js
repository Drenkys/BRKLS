document.addEventListener('DOMContentLoaded', function () {
    var showFormLink = document.getElementById('show_form_link');
    var contactForm = document.getElementById('contact_form');
    var closeFormButton = document.getElementById('close_form');

    // Funkce pro zobrazení formuláře
    function showForm(event) {
        event.preventDefault(); // Zabránění výchozímu chování odkazu
        contactForm.style.display = 'block';
    }

    // Funkce pro skrytí formuláře
    function hideForm() {
        contactForm.style.display = 'none';
    }

    // Přidání posluchačů událostí
    showFormLink.addEventListener('click', showForm);

    // Přidání posluchače událostí na celý dokument pro skrytí formuláře po kliknutí mimo něj
    document.addEventListener('click', function (event) {
        if (event.target !== showFormLink && event.target !== contactForm && !contactForm.contains(event.target)) {
            hideForm();
        }
    });

    // Přidání posluchače události pro tlačítko zavírání formuláře
    closeFormButton.addEventListener('click', function () {
        hideForm();
    });
});
