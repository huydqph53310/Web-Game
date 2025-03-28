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
        Schema::create('parts', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->integer('type'); // int NOT NULL
            $table->text('data')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
