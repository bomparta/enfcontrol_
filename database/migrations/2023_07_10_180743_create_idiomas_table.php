<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rrhh.idiomas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('funcionario_id');
            $table->string('nommbre_idioma',150);
            $table->biginteger('habla');
            $table->biginteger('lee') ;
            $table-> biginteger('escribe');
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
        Schema::dropIfExists('rrhh.idiomas');
    }
}
