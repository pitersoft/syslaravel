<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiligenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diligencias', function (Blueprint $table) {
            $table->id();;
            $table->integer('idusuario');
            $table->timestamp('fecha_hora_ingreso');
            $table->text('motivo');
            $table->time('tiempo');
            $table->timestamp('fecha_hora_retorno');
            $table->integer('estado');
            $table->longtext('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diligencias');
    }
}
