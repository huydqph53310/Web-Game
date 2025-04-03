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
        Schema::create('giftcodes', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->string('code', 255)->collation('utf8mb4_general_ci'); // varchar(255) COLLATE utf8mb4_general_ci NOT NULL
            $table->text('item')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->text('listIdPlayers')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->date('datecreate'); // date NOT NULL
            $table->date('expired'); // date NOT NULL
            $table->integer('count_left'); // int NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giftcodes');
    }
};
