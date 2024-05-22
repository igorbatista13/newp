<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Chave estrangeira para a tabela de usuários

            //     $table->unsignedBigInteger('user_id');
            //  $table->string('Nome_completo')->nullable();
            $table->string('Nome')->nullable();
            $table->string('Sobrenome')->nullable();
            $table->string('Sexo')->nullable();
            $table->date('Data_Nascimento')->nullable();
            $table->string('Email')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Linkedin')->nullable();
            $table->string('Site')->nullable();
            $table->string('image')->nullable();
            $table->string('Tipo')->nullable();

            $table->timestamps();

            //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
};
