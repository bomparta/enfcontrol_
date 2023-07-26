<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentezcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentezco')->insert([
            'descripcion' => 'Padre/Madre',           
            'status' => '1',
        ]);
        DB::table('parentezco')->insert([
            'descripcion' => 'Hijo/Hija',           
            'status' => '1',
        ]);
        DB::table('parentezco')->insert([
            'descripcion' => 'Conyuge',           
            'status' => '1',
        ]);
        DB::table('parentezco')->insert([
            'descripcion' => 'Suegro/Suegra',           
            'status' => '1',
        ]);
        DB::table('parentezco')->insert([
            'descripcion' => 'Sobrino/Sobrina',           
            'status' => '1',
        ]);
    }
}
