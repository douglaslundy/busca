<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaInformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_informas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',14);
            $table->string('nome', 50);
            $table->decimal('preco');
            $table->decimal('quantidade');
            $table->boolean('ativo');
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')->references('id')->on('empresa_noffs');
            
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
        Schema::drop('lista_informas');
    }
}
