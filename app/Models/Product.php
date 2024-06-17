<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'collection',
        'category',
        'short_description',
        'long_description',
        'year',
        'reservation',
        'sold',
        'price',
        'image_path',
    ];
    // Metoda pro vytvoření nového produktu
    public static function createProduct($data)
    {
        // Volání metody create() s polem $data
        return self::create($data);
    }
}
    