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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //O nome
            $table->string('thumburl'); //Possivel link para uma foto do projeto
            $table->boolean('is_completo'); //O projeto ja esta completo
            $table->string('description'); //Uma curta descricao que aparece nos cards
            $table->text('body'); //Conteudo em HTML do projeto
            $table->date('start_date'); //Data de inicio do projeto
            $table->string('techs'); //Tecnologias utilizadas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
