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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('color_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gem_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('image',255)->nullable();
            $table->integer('price',10,0);
            $table->integer('sale',10,0);
            $table->integer('stock',10,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
