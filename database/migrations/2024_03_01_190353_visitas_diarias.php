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
        Schema::create('visitas_diarias', function (Blueprint $table) {

            $table->increments('id');
    
           // $table->foreignId('modalidade_id')->constrained('modalidades')->onDelete('cascade')->nullable();
        //    $table->json('modalidade_id')->nullable();
    
            $table->string('Nome_Visita')->nullable();
            $table->date('Dias_Inicio')->nullable();
            $table->date('Dias_Fim')->nullable();
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('visitas_diarias');
    }
};
