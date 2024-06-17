<!-- mobile navigation -->
<div class="overflow hidden lg:hidden fixed inset-0 bg-black bg-opacity-50 z-20" id="mobile_overlay"></div>
<div class="mobile_menu fixed inset-x-0 top-0 bg-white bg-opacity-40 shadow-md h-screen transform -translate-y-full transition-transform duration-300 z-30 pt-32 w-1/2 mx-auto" id="mobile_menu">
    <ul class="flex flex-col justify-start items-center space-y-4 text-center">
        <li class="border-4 border-black rounded-xl bg-white min-w-64 p-2 "><a href="https://www.brkls.com/year.php" class="text-black text-xl py-6 px-14">Galerie</a></li>
        <li class="border-4 border-black rounded-xl bg-white min-w-64 p-2 "><a href="https://www.brkls.com/kontakt.php" class="text-black text-xl py-6 px-14">Kontakt</a></li>
    </ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const openMenu = document.getElementById('open');
        const closeMenu = document.getElementById('close');
        const mobileMenu = document.getElementById('mobile_menu');
        const mobileOverlay = document.getElementById('mobile_overlay');

        openMenu.addEventListener('click', function () {
            mobileMenu.classList.remove('-translate-y-full');
            mobileOverlay.classList.remove('hidden');
            openMenu.parentElement.classList.add('hidden');
            closeMenu.parentElement.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', function () {
            mobileMenu.classList.add('-translate-y-full');
            mobileOverlay.classList.add('hidden');
            closeMenu.parentElement.classList.add('hidden');
            openMenu.parentElement.classList.remove('hidden');
        });

        mobileOverlay.addEventListener('click', function () {
            mobileMenu.classList.add('-translate-y-full');
            mobileOverlay.classList.add('hidden');
            closeMenu.parentElement.classList.add('hidden');
            openMenu.parentElement.classList.remove('hidden');
        });
    });
</script> 
