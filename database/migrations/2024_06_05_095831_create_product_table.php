<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('collection');
            $table->string('category')->nullable(); // Přidání sloupce 'category'
            $table->integer('year')->default(null); // Přidání sloupce 'stock'
            $table->boolean('reservation')->default(false); // Přidání sloupce 'is_active'
            $table->boolean('sold')->default(false);
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**./
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
