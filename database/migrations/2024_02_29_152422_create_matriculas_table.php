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
        $table->unsignedInteger('alunos_id');
        $table->foreign('alunos_id')->references('id')->on('alunos')->onDelete('cascade');
           
        $table->unsignedInteger('planos_id');
        $table->foreign('planos_id')->references('id')->on('planos')->onDelete('cascade');
           
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
