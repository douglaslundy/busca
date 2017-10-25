<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaNoffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_noffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao', 100);
            $table->string('fantasia', 100);
            $table->string('rua', 50);
            $table->integer('num');
            $table->string('bairro', 30);
            $table->integer('cidade');
            $table->integer('cnpj');
            $table->integer('telefone');
            $table->integer('celular');
            
            // chave estrangeira de usuario, ainda a testar
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            
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
        Schema::drop('empresa_noffs');
    }
}
