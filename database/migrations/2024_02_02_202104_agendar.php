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
        Schema::create('agendar', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150)->unique();
            $table->string('importancia', 250);
            $table->string('descricao', 250);
            $table->date('dataInicio');
            $table->date('dataFinal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendar');
    }
};
