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
        Schema::create('house', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('history')->nullable();
            $table->unsignedBigInteger('region_id')->index('house_region_id_foreign');
            $table->bigInteger('defense');
            $table->bigInteger('influence');
            $table->bigInteger('lands');
            $table->bigInteger('law');
            $table->bigInteger('population');
            $table->bigInteger('power');
            $table->bigInteger('fortune');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house');
    }
};
