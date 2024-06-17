@extends('layouts.app')

@section('title', 'Úvodní stránka | BRKLS')
@section('description', 'Popis úvodní stránky')
@section('ogTitle', 'Úvodní stránka BRKLS')
@section('ogDescription', 'Popis pro OG')
@section('ogImage', 'https://www.brkls.com/img/custom_image.jpeg')
@section('ogUrl', url()->current())

@section('welcome')

    <!-- welcome video -->
    <iframe class="w-[560px] h-[315px] mx-auto pt-5" src="https://www.youtube.com/embed/b12kob3W3z4?si=Tg_rJaSSQ8460cmK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>

@endsection

<!-- welcome text -->
@push('welcome-content')
<p class="welcome-content">
    Hlavním protagonistou výstavy “BEZ BRZD” je René Mucha, známý pod pseudonymem Renno Mucho. Narodil se 6. března 1989 v Praze a svým uměním přináší do světa kaligrafie a street artu nové dimenze. Jeho tvorbu ovlivnili světově proslulí...
</p>
<img class="welcome-content w-80 mx-auto" src="images/brkls.jpeg" alt="">
<p class="welcome-content">
    Naše vize sahá daleko za hranice ateliéru - usilujeme o pořádání výstav po celé České republice i za jejími hranicemi. Cílem je vytvořit platformu pro navazování spoluprací s rozvíjejícími se umělci, kteří hledají prostor...
</p>
<p class="welcome-content">
    Věnujeme se také zakázkovým projektům ve veřejných i neveřejných prostorách dle individuálních představ.
</p>
@endpush

@section('content')

@section('products')
    @foreach ($products as $product)
    <div class="w-80 h-[410px] shadow-[0px_0px_4px_1px_#ff9300] relative my-10">
        @if ($product->image_path)
        <div class="h-[70%] bg-gray-600">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="h-[100%] m-auto">
        </div>
        @else
            No Image
         @endif
        <div class="text-3xl font-bold text-center mt-1 ">{{ $product->name }}</div>
        <div class="text-center">{{ $product->short_description }}</div>
        <div class="absolute bottom-0 m-1 font-bold text-xl">{{ $product->price }} Kč</div>
    </div>
                            
    @endforeach
@endsection
@endsection
