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
        Schema::create('house_historical_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('house_id')->index('house_historical_events_house_id_foreign');
            $table->unsignedBigInteger('event_id')->index('house_historical_events_event_id_foreign');
            $table->bigInteger('defense_result');
            $table->bigInteger('influence_result');
            $table->bigInteger('lands_result');
            $table->bigInteger('law_result');
            $table->bigInteger('population_result');
            $table->bigInteger('power_result');
            $table->bigInteger('fortune_result');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_historical_events');
    }
};
