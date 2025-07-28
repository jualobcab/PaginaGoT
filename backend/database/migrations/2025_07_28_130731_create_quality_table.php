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
        Schema::create('quality', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->boolean('repeatable')->nullable()->default(false);
            $table->enum('type', ['Habilidad', 'Predestinada', 'Heredada', 'Marcial', 'Social'])->default('_utf8mb4\\\\\'\'Marcial\\\\\'\'');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quality');
    }
};
