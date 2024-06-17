<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'collection' => 'required',
            'category' => 'nullable',
            'short_description' => 'required',
            'long_description' => 'required',
            'year' => 'nullable|integer',
            'reservation' => 'boolean',
            'sold' => 'boolean',
            'price' => 'required|numeric',
            'image_path' => 'nullable|image',
        ]);
    
        // Vytvoření nové instance Product s daty z požadavku
        $product = Product::create($request->all());
    
        // Pokud byl nahrán soubor, uložení jeho cesty do vlastnosti image_path
        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('public/images');
            $product->image_path = str_replace('public', '', $path);
        }
    
        // Uložení produktu do databáze
        $product->save();
    
        // Přesměrování na stránku s indexem produktů s úspěšnou zprávou
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if($product->image_path && file_exists(storage_path('app/public/' . $product->image_path))) {
            unlink(storage_path('app/public/' . $product->image_path));
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product delete successfuly');
    }
}
