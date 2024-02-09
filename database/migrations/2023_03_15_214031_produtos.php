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
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo_barra')->nullable();
            $table->string('Nome_Produto')->nullable();
            $table->string('Categoria_Produto')->nullable();
            $table->string('Status_Produto')->nullable();
            $table->decimal('Peso_Liquido',10,4)->nullable();
            $table->decimal('Peso_Bruto',10,4)->nullable();
            $table->string('Estoque_Produto')->nullable();
            $table->string('Marca')->nullable();
            $table->string('Localizacao')->nullable();
            $table->decimal('Preco_Venda')->nullable();
            $table->decimal('Preco_Custo')->nullable();
            $table->string('Unidade_Medida')->nullable();
            $table->date('Data_Lote')->nullable();
            $table->date('Data_Vencimento')->nullable();
            $table->string('Quantidade_Produto')->nullable();

            $table->foreignId('Fornecedor_id')->constrained('fornecedor')->onDelete('cascade');
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
        Schema::dropIfExists('produtos');
    }
};