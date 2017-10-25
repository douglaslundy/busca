<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoUf');
            $table->string('nome', 20);
            $table->string('uf', 2);
            $table->string('regiao', 20);
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('estados');
    }

}
