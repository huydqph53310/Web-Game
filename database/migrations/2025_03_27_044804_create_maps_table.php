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
        Schema::create('maps', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->string('name', 255)->collation('utf8mb4_general_ci'); // varchar(255) COLLATE utf8mb4_general_ci NOT NULL
            $table->integer('icon');
            $table->integer('background');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maps');
    }
};
