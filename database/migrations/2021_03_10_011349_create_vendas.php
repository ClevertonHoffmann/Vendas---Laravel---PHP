<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id('cod');
            $table->date('datavenda')->nullable();
            $table->date('datavencimento')->nullable();
            $table->string('situacao');
            $table->unsignedBigInteger('vendedores_cod');
            $table->unsignedBigInteger('clientes_cod');
            $table->foreign('vendedores_cod')->references('cod')->on('vendedores');      
            $table->foreign('clientes_cod')->references('cod')->on('clientes');
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
        Schema::dropIfExists('vendas');
    }
}
