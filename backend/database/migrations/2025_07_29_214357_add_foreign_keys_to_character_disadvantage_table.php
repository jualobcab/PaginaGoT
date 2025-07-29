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
        Schema::table('character_disadvantage', function (Blueprint $table) {
            $table->foreign(['character_id'])->references(['id'])->on('character')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['disadvantage_id'])->references(['id'])->on('disadvantage')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character_disadvantage', function (Blueprint $table) {
            $table->dropForeign('character_disadvantage_character_id_foreign');
            $table->dropForeign('character_disadvantage_disadvantage_id_foreign');
        });
    }
};
