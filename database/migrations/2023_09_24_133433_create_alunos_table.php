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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('apelido', 100);
            $table->enum('sexo', [
                'M',
                'F'
            ]);
            $table->string('numeroProcesso', 100)->nullable();
            $table->string('proveniencia', 200)->nullable();
            $table->date('dataNascimento');
            $table->string('nacionalidade', 100);
            $table->string('provinciaNascimento', 100)->nullable();
            $table->string('distritoNascimento', 200)->nullable();
            $table->string('nomePai', 255)->nullable();
            $table->string('nomeMae', 255)->nullable();
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
