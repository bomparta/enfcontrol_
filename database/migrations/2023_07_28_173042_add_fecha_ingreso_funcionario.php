<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFechaIngresoFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('rrhh.funcionario', function (Blueprint $table) {
            $table->date('fecha_ingreso_adm')->nullable();
            $table->date('fecha_ingreso_fund')->nullable();
            $table->date('fecha_ingreso_vac')->nullable();
             
            });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
