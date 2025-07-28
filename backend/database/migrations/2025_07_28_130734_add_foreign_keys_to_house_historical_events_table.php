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
        Schema::table('house_historical_events', function (Blueprint $table) {
            $table->foreign(['event_id'])->references(['id'])->on('historical_events')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['house_id'])->references(['id'])->on('house')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('house_historical_events', function (Blueprint $table) {
            $table->dropForeign('house_historical_events_event_id_foreign');
            $table->dropForeign('house_historical_events_house_id_foreign');
        });
    }
};
