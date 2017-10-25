<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaPesquisasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('lista_pesquisas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 14);
            $table->string('nome', 50);
            $table->decimal('quantidade');
            
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
    public function down() {
        Schema::drop('lista_pesquisas');
    }

}
