<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh.cursos', function (Blueprint $table) {
            $table->id();
             $table->smallInteger('funcionario_id');
             $table->string('nommbre_curso',255);
             $table->string('institucion_curso',255);
             $table->string('dir_ref_curso',255);
             $table->date('fechainicio_curso');
             $table->date('fechaculminacion_curso');
             $table->bigInteger('status')->default(1);      
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
        Schema::dropIfExists('rrhh.cursos');
    }
}
