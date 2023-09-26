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
        Schema::create('turmas', function (Blueprint $table) {
            $table->string('codigo', 15)->unique();
            $table->primary('codigo');
            $table->string('designacao', 50);
            $table->integer('ciclo');
            $table->integer('anoLectivo');
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->onUpdate('cascade');
            $table->string('regime');
            $table->enum('turno', [
                'CD',
                'CN'
            ]);
            $table->string('sala', 10);
            $table->string('tipoEscola', 10);
            $table->unsignedBigInteger('dt');
            $table->foreign('dt')->references('id')->on('professors')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
