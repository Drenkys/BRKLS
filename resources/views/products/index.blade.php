@extends('layouts.app')

@section('title', 'Galerie | BRKLS')
@section('description', 'Naše vize sahá daleko za hranice ateliéru - usilujeme o pořádání výstav po celé České republice i za jejími hranicemi. Cílem je vytvořit platformu pro navazování spoluprací s rozvíjejícími se umělci, kteří hledají prostor...')
@section('ogTitle', 'Galerie | BRKLS')
@section('ogDescription', 'Popis pro OG')
@section('ogImage', 'https://www.brkls.com/img/custom_image.jpeg')
@section('ogUrl', url()->current())


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