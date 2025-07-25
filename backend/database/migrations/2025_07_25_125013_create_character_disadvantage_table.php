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
        Schema::create('character_disadvantage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('character_id')->index('character_disadvantage_character_id_foreign');
            $table->unsignedBigInteger('disadvantage_id')->index('character_disadvantage_disadvantage_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_disadvantage');
    }
};
