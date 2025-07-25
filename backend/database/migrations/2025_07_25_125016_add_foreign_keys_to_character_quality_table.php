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
        Schema::table('character_quality', function (Blueprint $table) {
            $table->foreign(['character_id'])->references(['id'])->on('character')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['quality_id'])->references(['id'])->on('quality')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character_quality', function (Blueprint $table) {
            $table->dropForeign('character_quality_character_id_foreign');
            $table->dropForeign('character_quality_quality_id_foreign');
        });
    }
};
