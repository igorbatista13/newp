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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('alunos_id')->nullable();
            $table->unsignedInteger('planos_id');
            $table->foreign('planos_id')->references('id')->on('planos')->onDelete('cascade');
    
            // Definindo a chave estrangeira com opção ON UPDATE CASCADE
            $table->foreign('alunos_id')->references('id')->on('alunos')
                ->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('matriculas');
    }
};
