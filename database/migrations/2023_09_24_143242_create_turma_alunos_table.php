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
        Schema::create('turma_alunos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAluno');
            $table->foreign('idAluno')->references('id')->on('alunos')->onUpdate('cascade');
            $table->string('idTurma', 15);
            $table->foreign('idTurma')->references('id')->on('turmas')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_alunos');
    }
};
