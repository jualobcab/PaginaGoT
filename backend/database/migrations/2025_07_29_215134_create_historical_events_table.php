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
        Schema::create('historical_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('name');
            $table->string('defense_throw');
            $table->string('influence_throw');
            $table->string('lands_throw');
            $table->string('law_throw');
            $table->string('population_throw');
            $table->string('power_throw');
            $table->string('fortune_throw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_events');
    }
};
