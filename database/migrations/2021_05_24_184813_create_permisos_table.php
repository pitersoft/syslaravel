<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->integer('idnivel');
            $table->integer('usuarios');
            $table->integer('personas');
            $table->integer('visitas');
            $table->integer('permisos');
            $table->integer('reporte_permisos');
            $table->integer('diligencias');
            $table->integer('reporte_diligencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
}
