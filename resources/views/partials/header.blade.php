    <nav class="p-4 h-32 relative shadow-[0px_3px_5px_#ff9300]">
        <!-- logo -->
        <div class="h-16 absolute">
            <a href="{{ route('index') }}" class="text-white text-lg font-bold"><img src="/images/brkls.jpeg" alt="Logo" class="max-h-full"></a>
        </div>
        <!-- navigation -->
        <div class="container mx-auto flex justify-center items-center h-32 hidden lg:flex"> 
            <ul class="flex items-end mb-4">
                <li><a href="{{ route('products.index') }}" class="text-black text-4xl mx-2">Gallery</a></li>
                <li><a href="{{ route('index') }}"><img src="/images/brkls_logo.jpeg" alt="" class="h-28 mx-2"></a></li>
                <li><a href="{{ route('contact') }}" class="text-black text-4xl mx-2">Contact</a></li>
            </ul>
        </div>
        <!-- mobile navigation toggle -->
        <div class="hamburger lg:hidden flex items-center absolute right-2">
            <div class="open_menu">
                <img id="open" src="/images/open.png" alt="Open Menu" class="h-24">
            </div>
            <div class="close_menu hidden">
                <img id="close" src="/images/close.png" alt="Close Menu" class="h-24">
            </div>
        </div>
    </nav>