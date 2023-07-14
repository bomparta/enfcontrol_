<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFuncionariorioTable extends Migration
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
            $table->string('telfhabitacion')->nullable()->after('institucion_estudia');  
            $table->string('telcelular')->nullable();
            $table->string('direccion_contacto')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->string('persona_contacto')->nullable();   
          
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
        Schema::dropIfExists('rrhh.funcionario');
    }
}
