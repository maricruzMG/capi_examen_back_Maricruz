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
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_domicilio');
    }
};
