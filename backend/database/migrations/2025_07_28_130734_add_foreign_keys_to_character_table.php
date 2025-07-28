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
        Schema::table('character', function (Blueprint $table) {
            $table->foreign(['age_category_id'])->references(['id'])->on('age_category')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['house_id'])->references(['id'])->on('house')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('character', function (Blueprint $table) {
            $table->dropForeign('character_age_category_id_foreign');
            $table->dropForeign('character_house_id_foreign');
        });
    }
};
