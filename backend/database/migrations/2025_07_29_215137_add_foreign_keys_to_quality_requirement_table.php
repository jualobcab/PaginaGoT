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
        Schema::table('quality_requirement', function (Blueprint $table) {
            $table->foreign(['quality_id'])->references(['id'])->on('quality')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_quality_id2'])->references(['id'])->on('quality')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_quality_id3'])->references(['id'])->on('quality')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_quality_id'])->references(['id'])->on('quality')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_specialty_id2'])->references(['id'])->on('specialty')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_specialty_id'])->references(['id'])->on('specialty')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_stat_id2'])->references(['id'])->on('stat')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_stat_id3'])->references(['id'])->on('stat')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['required_stat_id'])->references(['id'])->on('stat')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quality_requirement', function (Blueprint $table) {
            $table->dropForeign('quality_requirement_quality_id_foreign');
            $table->dropForeign('quality_requirement_required_quality_id2_foreign');
            $table->dropForeign('quality_requirement_required_quality_id3_foreign');
            $table->dropForeign('quality_requirement_required_quality_id_foreign');
            $table->dropForeign('quality_requirement_required_specialty_id2_foreign');
            $table->dropForeign('quality_requirement_required_specialty_id_foreign');
            $table->dropForeign('quality_requirement_required_stat_id2_foreign');
            $table->dropForeign('quality_requirement_required_stat_id3_foreign');
            $table->dropForeign('quality_requirement_required_stat_id_foreign');
        });
    }
};
