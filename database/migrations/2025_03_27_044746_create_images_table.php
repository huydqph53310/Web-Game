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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->integer('imgId'); // int NOT NULL
            $table->integer('x'); // int NOT NULL
            $table->integer('y'); // int NOT NULL
            $table->integer('width'); // int NOT NULL
            $table->integer('height'); // int NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
