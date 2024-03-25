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
        Schema::create('planos', function (Blueprint $table) {

            $table->increments('id');
    
           // $table->foreignId('modalidade_id')->constrained('modalidades')->onDelete('cascade')->nullable();
        //    $table->json('modalidade_id')->nullable();
    
            $table->string('Nome_Plano')->nullable();
            $table->string('Preco')->nullable();
            $table->string('Obs')->nullable();
            $table->string('Status')->nullable();
            $table->String('Beneficos')->nullable();
            $table->String('Vigencia')->nullable(); 
            // Mensal, Trimestral, Semestral, Anual
            // 
            $table->string('image')->nullable();
        
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
        Schema::dropIfExists('planos');
    }
};
