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
        Schema::create('players', function (Blueprint $table) {
            $table->id(); // int NOT NULL AUTO_INCREMENT
            $table->unsignedBigInteger('user_id'); // int NOT NULL (foreign key)
            $table->string('name', 20)->collation('utf8mb4_general_ci'); // varchar(20) COLLATE utf8mb4_general_ci NOT NULL
            $table->integer('gold')->default(0); // int NOT NULL DEFAULT 0
            $table->integer('cup')->default(0); // int NOT NULL DEFAULT 0
            $table->integer('gem')->default(0); // int NOT NULL DEFAULT 0
            $table->string('data', 1000)->collation('utf8mb4_general_ci')
                  ->default('{"power":100,"avenger":100,"kill":0,"dead":1,"assist":0,"trainingSuccess":0,"busyHammer":0,"nHammer":2,"exp":0,"point":0,"pointAdd":[1000,0,0,0,0,0], "lastlevel":0}'); // varchar(1000) NOT NULL DEFAULT ...
            $table->text('bag')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->text('body')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->text('balo')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->text('box')->collation('utf8mb4_general_ci'); // text COLLATE utf8mb4_general_ci NOT NULL
            $table->string('achievement', 255)->collation('utf8mb4_general_ci')
                  ->default('[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]'); // varchar(255) NOT NULL DEFAULT ...
            $table->string('achievementLevel', 255)->collation('utf8mb4_general_ci')
                  ->default('[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]'); // varchar(255) NOT NULL DEFAULT ...
            $table->string('Friends', 255)->collation('utf8mb4_general_ci')
                  ->default('[]'); // varchar(255) NOT NULL DEFAULT '[]'

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
