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
        Schema::table('character_stat', function (Blueprint $table) {
            $table->foreign(['character_id'])->references(['id'])->on('character')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['stat_id'])->references(['id'])->on('stat')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character_stat', function (Blueprint $table) {
            $table->dropForeign('character_stat_character_id_foreign');
            $table->dropForeign('character_stat_stat_id_foreign');
        });
    }
};
