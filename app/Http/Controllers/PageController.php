<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
           // Získání všech záznamů z tabulky products
           $products = Product::all();

           // Vrácení zobrazení indexu s produkty
           return view('index', ['products' => $products]);
    }
    public function product()
    {
        return view('product');
    }
    public function products()
    {
        return view('products');
    }
    public function contact()
    {
        return view('contact');
    }
    public function gdpr()
    {
        return view('gdpr');  
    }
}
