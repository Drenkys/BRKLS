<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- 
    Zobrazení stránek
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Popis při vyhledávání -->
    <title>@yield('title', 'Hlavní stránka | BRKLS')</title>
    <meta name="description" content="@yield('description', 'Vítejte v našem světě, kde se tradice setkává s inovací a umění ožívá před vašimi očima. Jsme průkopníky spojení tradiční kaligrafie s moderním 3D tiskem, a tím vytváříme nejen obrazy, které osloví vaše smysly, ale i unikátní designové kousky oblečení, které překračují běžné hranice kreativity.')">
    <!-- Zobrazení na sociálních sítích -->
    <meta property="og:title" content="@yield('ogTitle', 'BRKLS')">
    <meta property="og:description" content="@yield('ogDescription', 'Vítejte v našem světě, kde se tradice setkává s inovací a umění ožívá před vašimi očima. Jsme průkopníky spojení tradiční kaligrafie s moderním 3D tiskem, a tím vytváříme nejen obrazy, které osloví vaše smysly, ale i unikátní designové kousky oblečení, které překračují běžné hranice kreativity.')">
    <!-- Obrázek pro sociální sítě, oby by se měly shodovat -->
    <meta property="og:image" content="@yield('ogImage', 'https://www.brkls.com/img/brkls_logo_full.jpeg')">
    <meta property="og:image:secure_url" content="@yield('ogImageSecure', 'https://www.brkls.com/img/brkls_logo_full.jpeg')">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/manifest.json">
    <!-- Stránka, která se má zobrazit v sockách -->
    <meta property="og:url" content="@yield('ogUrl', 'https://www.brkls.com/year.php')">
    <meta property="og:site_name" content="BRKLS">
    <meta property="og:type" content="website">
    <!-- 
    Styly CSS
    -->
    @vite('resources/css/app.css')
    @stack('head')
    </head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        @include('partials.mobileHeader')
        <div id="welcome-bg" class="text-center text-2xl bg-[url('http://localhost/images/background.jpg')] bg-cover border-b-2 border-black">
            @yield('welcome')
            <div class="welcome-content">
                @stack('welcome-content')
            </div>
        </div>

        <!-- Products -->
        <h2 class="text-center font-bold text-5xl mb-5">Souhrn vystavených obrazů</h2>
        <div class="flex justify-center gap-5">
            @yield('products')
        </div>
    </main>
    <footer class="bg-gradient-to-r from-gray-400 from-0% via-slate-100 via-50% to-gray-400 to-100%">
        @include('partials.footer')
    </footer>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>