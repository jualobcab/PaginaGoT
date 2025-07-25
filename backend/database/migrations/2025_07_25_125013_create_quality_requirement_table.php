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
        Schema::create('quality_requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quality_id')->index('quality_requirement_quality_id_foreign');
            $table->unsignedBigInteger('required_stat_id')->nullable()->index('quality_requirement_required_stat_id_foreign');
            $table->unsignedBigInteger('required_stat_rank')->nullable();
            $table->unsignedBigInteger('required_specialty_id')->nullable()->index('quality_requirement_required_specialty_id_foreign');
            $table->unsignedBigInteger('required_specialty_rank')->nullable();
            $table->unsignedBigInteger('required_quality_id')->nullable()->index('quality_requirement_required_quality_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quality_requirement');
    }
};
