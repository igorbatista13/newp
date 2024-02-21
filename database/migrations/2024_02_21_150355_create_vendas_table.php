<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {

        $table->increments('id');

        // $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade')->nullable;
        
        $table->string('Nome_Cliente')->nullable();
        $table->string('Forma_Pagamento')->nullable();
        $table->string('DataRetirada')->nullable();
        $table->decimal('Taxa')->nullable();
        $table->decimal('Desconto')->nullable();
        $table->string('MensagemCliente')->nullable();
        $table->string('Observacoes')->nullable();
        $table->decimal('total')->nullable();


        $table->timestamps();

    });
}
    

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}