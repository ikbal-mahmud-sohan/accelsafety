<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('non_hazardous_waste_inventories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('month'); // Month of the report
            $table->decimal('cutting_jhute', 15, 2)->nullable(); // Cutting Jhute
            $table->decimal('sewing_jhut', 15, 2)->nullable(); // Sewing Jhut
            $table->decimal('dying_jhut', 15, 2)->nullable(); // Dying Jhut
            $table->decimal('cut_piece', 15, 2)->nullable(); // Cut Piece
            $table->decimal('short_piece', 15, 2)->nullable(); // Short Piece
            $table->decimal('left_over_fabrics', 15, 2)->nullable(); // Left Over Fabrics
            $table->decimal('cartoon', 15, 2)->nullable(); // Cartoon
            $table->decimal('cone', 15, 2)->nullable(); // Cone
            $table->decimal('ply', 15, 2)->nullable(); // Ply
            $table->decimal('plastic', 15, 2)->nullable(); // Plastic
            $table->decimal('left_over_garments', 15, 2)->nullable(); // Left Over Garments
            $table->decimal('metalic_scrap', 15, 2)->nullable(); // Metallic Scrap
            $table->decimal('loose_sewing_thread', 15, 2)->nullable(); // Loose Sewing Thread
            $table->decimal('wood_material', 15, 2)->nullable(); // Wood Material
            $table->decimal('broken_niddle', 15, 2)->nullable(); // Broken Needle
            $table->decimal('food_waste', 15, 2)->nullable(); // Food Waste
            $table->decimal('paper', 15, 2)->nullable(); // Paper Waste
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_hazardous_waste_inventories');
    }
};
