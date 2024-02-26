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
    { {
            Schema::create('modalidades', function (Blueprint $table) {
                $table->id();
                $table->string('Nome_Modalidade');
                $table->string('Obs')->nullable();
                $table->string('Tipo')->nullable();
                $table->string('Situacao')->nullable();


                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidades');
    }
};
