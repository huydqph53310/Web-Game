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
        Schema::create('captionlvs', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->string('name', 100)->collation('utf8mb4_general_ci'); // varchar(100) COLLATE utf8mb4_general_ci NOT NULL
            $table->integer('exp'); // int NOT NULL
            $table->integer('icon'); // int NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('captionlvs');
    }
};
