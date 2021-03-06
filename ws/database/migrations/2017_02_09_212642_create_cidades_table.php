<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 30);
            $table->string('Uf', 2);
            $table->integer('codigoMunicipio');
            $table->boolean('ativo');
            $table->integer('idEstado')->unsigned();
            $table->foreign('idEstado')->references('id')->on('estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('cidades');
    }

}
