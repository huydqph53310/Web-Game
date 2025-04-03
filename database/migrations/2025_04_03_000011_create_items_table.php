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
        Schema::create('items', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->string('name', 255)->collation('utf8mb4_general_ci'); // varchar(255) COLLATE utf8mb4_general_ci NOT NULL
            $table->integer('type'); // int NOT NULL
            $table->integer('gender'); // int NOT NULL
            $table->text('description')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->integer('level'); // int NOT NULL
            $table->integer('icon'); // int NOT NULL
            $table->unsignedBigInteger('part'); // int NOT NULL (foreign key)
            $table->integer('strRequire'); // int NOT NULL
            $table->integer('buyGold'); // int NOT NULL
            $table->integer('buyGem'); // int NOT NULL
            $table->text('options'); // int NOT NULL
            $table->integer('nquantity'); // int NOT NULL
            // Foreign key constraint
            // $table->foreign('part')->references('id')->on('parts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
