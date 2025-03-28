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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id('iddb'); // int NOT NULL AUTO_INCREMENT
            $table->unsignedBigInteger('id'); // int NOT NULL (foreign key)
            $table->integer('level'); // int NOT NULL
            $table->string('description', 255)->collation('utf8mb4_romanian_ci'); // varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL
            $table->integer('max'); // int NOT NULL
            $table->integer('rewardMoney'); // int NOT NULL

            // Foreign key constraint
            $table->foreign('id')->references('id')->on('achievementrequires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
