<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoTrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_trabajador')->insert([

            'descripcion' => 'Empleado Fijo',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Contratado',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Obrero Fijo',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Directivo',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Comisión de Servicio',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Coordinador',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Directivo Comisión de Servicio',           
        ]);
        DB::table('tipo_trabajador')->insert([
            'descripcion' => 'Todos',           
        ]);
    }
}
