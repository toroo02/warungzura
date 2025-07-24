<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method is executed when you run the 'php artisan migrate' command.
     * It creates the 'menu_items' table with the specified columns.
     */
    public function up(): void
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing integer
            $table->string('name'); // Column for the item's name
            $table->text('description')->nullable(); // Column for the item's description, can be empty
            $table->decimal('price', 10, 2); // Column for the price, allowing up to 10 digits with 2 decimal places
            $table->string('category'); // Column for the item's category (e.g., 'Makanan', 'Minuman')
            $table->string('image')->nullable(); // Column to store the path to the item's image, can be empty
            $table->timestamps(); // Automatically creates 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method is executed when you run 'php artisan migrate:rollback'.
     * It drops (deletes) the 'menu_items' table.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
