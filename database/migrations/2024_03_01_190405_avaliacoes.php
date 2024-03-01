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
        Schema::create('avaliacoes', function (Blueprint $table) {

            $table->increments('id');
    
           // $table->foreignId('modalidade_id')->constrained('modalidades')->onDelete('cascade')->nullable();
        //    $table->json('modalidade_id')->nullable();
    
            $table->string('Nome_Avaliacao')->nullable();
            $table->string('Status')->nullable();
            $table->string('image')->nullable();
        
        
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
};
