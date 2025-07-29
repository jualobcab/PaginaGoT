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
        Schema::create('age_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('max_stat_rank');
            $table->bigInteger('experience_points');
            $table->bigInteger('specialty_points');
            $table->bigInteger('destiny_points');
            $table->bigInteger('min_disadvantages');
            $table->bigInteger('max_qualities');
            $table->string('info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('age_category');
    }
};
