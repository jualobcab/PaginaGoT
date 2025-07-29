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
        Schema::create('specialty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('action');
            $table->text('description');
            $table->binary('table')->nullable();
            $table->text('description2')->nullable();
            $table->unsignedBigInteger('stat_id')->index('specialty_stat_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialty');
    }
};
