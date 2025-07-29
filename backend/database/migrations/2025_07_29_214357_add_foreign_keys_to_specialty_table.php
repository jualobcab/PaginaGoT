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
        Schema::table('specialty', function (Blueprint $table) {
            $table->foreign(['stat_id'])->references(['id'])->on('stat')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('specialty', function (Blueprint $table) {
            $table->dropForeign('specialty_stat_id_foreign');
        });
    }
};
