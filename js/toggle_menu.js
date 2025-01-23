const openButton = document.getElementById('open');
const closeButton = document.getElementById('close');
const mobileMenu = document.getElementById('mobile_menu');

openButton.addEventListener('click', () => {
    openButton.style.display = 'none';
    closeButton.style.display = 'block';
    mobileMenu.classList.add('show');
    setTimeout(() => {
        mobileMenu.classList.add('show_2');
    }, 100);
});

closeButton.addEventListener('click', () => {
    openButton.style.display = 'block';
    closeButton.style.display = 'none';
    mobileMenu.classList.remove('show_2');
    setTimeout(() => {
        mobileMenu.classList.remove('show');
    }, 1200);
});
