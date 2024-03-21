<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

        $table->increments('id');

       // $table->foreignId('modalidade_id')->constrained('modalidades')->onDelete('cascade')->nullable();
       $table->json('modalidade_id')->nullable();

        $table->string('Nome_Completo')->nullable();
        $table->string('Email')->nullable();
        $table->string('CPF')->nullable();
        $table->string('Sexo')->nullable();
        $table->string('RG')->nullable();
        $table->date('Data_Nascimento')->nullable();
        $table->string('Telefone')->nullable();
        $table->string('Profissao')->nullable();
        $table->string('Empresa')->nullable();
        $table->string('Anexo')->nullable();
        $table->string('image')->nullable();
        $table->string('Endereco')->nullable();
        $table->string('CEP')->nullable();
        $table->string('Numero')->nullable();
        $table->string('Complemento')->nullable();
        $table->string('Bairro')->nullable();
        $table->string('Cidade')->nullable();
        $table->string('Estado')->nullable();
        $table->string('Perfil')->nullable();
        
        
        $table->timestamps();

    });
}
    

    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}