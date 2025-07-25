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
        Schema::create('character_specialty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('character_id')->index('character_specialty_character_id_foreign');
            $table->unsignedBigInteger('specialty_id')->index('character_specialty_specialty_id_foreign');
            $table->bigInteger('rank');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_specialty');
    }
};
