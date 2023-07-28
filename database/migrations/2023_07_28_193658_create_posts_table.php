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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // chave estrangeira pra usuario definido no model User
            $table->string('title'); //varchar
            $table->text('body');
            $table->text('thumburl'); //guarda o URL da thumbnail do post
            $table->timestamps(); //created at e updated at uteis para controle do bd
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
