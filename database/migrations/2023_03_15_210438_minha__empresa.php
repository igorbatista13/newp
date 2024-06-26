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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_Empresa');
            $table->string('Endereco')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Logo')->nullable();
            $table->string('Descricao')->nullable();
            $table->string('Cnpj')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Site')->nullable();;
            $table->string('Chave_Pix')->nullable();
            $table->string('image')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
