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
        Schema::create('character', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('position');
            $table->unsignedBigInteger('age_category_id')->index('character_age_category_id_foreign');
            $table->bigInteger('experience_points_total');
            $table->bigInteger('experience_points_remaining');
            $table->bigInteger('destiny_points_total');
            $table->bigInteger('destiny_points_remaining');
            $table->unsignedBigInteger('house_id')->index('character_house_id_foreign');
            $table->text('history');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character');
    }
};
