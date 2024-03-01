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
        Schema::create('vendas_pivot', function (Blueprint $table) {

            // $table->foreign('orcamento_id')->references('id')->on('orcamentos');
            // $table->foreign('produto_id'  )->references('id')->on('produtos');
            $table->integer('Quantidade');
    
            $table->unsignedInteger('vendas_id');
            $table->foreign('vendas_id')->references('id')->on('vendas')->onDelete('cascade');
               
            $table->unsignedInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas_pivot');
    }
};
