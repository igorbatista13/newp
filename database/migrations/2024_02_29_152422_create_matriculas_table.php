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
        $table->unsignedBigInteger('aluno_id'); // Chave estrangeira para o aluno
        // Outros campos relacionados à matrícula
        $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
     

        
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
