<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvendas', function (Blueprint $table) {
            $table->unsignedBigInteger('carros_cod');
            $table->unsignedBigInteger('vendas_cod');
            $table->foreign('carros_cod')->references('cod')->on('carros');
            $table->foreign('vendas_cod')->references('cod')->on('vendas');
            $table->integer('quantidade');
            $table->double('valortotal');
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
        Schema::dropIfExists('itensvendas');
    }
}
