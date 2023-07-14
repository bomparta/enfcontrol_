<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banco')->insert([
            'nombre' => 'BANCO DE VENEZUELA, S.A. BANCO UNIVERSAL.',
            'nro_cuenta' => '0102-0140-30-0000187046',
            'status' => '1',
        ]);
        DB::table('banco')->insert([
            'nombre' => 'BANESCO BANCO UNIVERSAL, C.A.',
            'nro_cuenta' => '0134-0044-0804-4105-2855',
            'status' => '1',
        ]);
        DB::table('banco')->insert([
            'nombre' => 'BANCO NACIONAL DE CRÉDITO, C.A. BANCO UNIVERSAL',
            'nro_cuenta' => 'S/N',
            'status' => '1',
        ]);
        DB::table('banco')->insert([
            'nombre' => 'BANCO OCCIDENTAL DE DESCUENTO, BANCO UNIVERSAL C.A',
            'nro_cuenta' => 'S/N',
            'status' => '1',
        ]);
        DB::table('banco')->insert([
            'nombre' => 'BANCO PLAZA, C.A., BANCO UNIVERSAL',
            'nro_cuenta' => 'S/N',
            'status' => '1',
        ]);
   
    DB::table('banco')->insert([
        'nombre' => 'BANCO DEL CARIBE C.A., BANCO UNIVERSAL (BANCARIBE)',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO SOFITASA BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'DEL SUR BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO DEL TESORO, C.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO EXTERIOR, C.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO INTERNACIONAL DE DESARROLLO, C.A BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO DE LA FUERZA ARMADA NACIONAL BOLIVARIANA, BANCO UNIVERSAL, C.A. (BANFANB)',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BFC BANCO FONDO COMUN, C.A. BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANPLUS BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => '100% BANCO, BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => '100% BANCO, BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO PROVINCIAL, S.A. BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO BICENTENARIO, DEL PUEBLO, DE LA CLASE OBRERA, MUJER Y COMUNAS, BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO AGRÍCOLA DE VENEZUELA, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO CARONÍ, C.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'MERCANTIL, C.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO ACTIVO C.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'VENEZOLANO DE CRÉDITO, S.A., BANCO UNIVERSAL',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCAMIGA BANCO UNIVERSAL, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO NACIONAL DE VIVIENDA Y HABITAT (BANAVIH)',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO DE LA GENTE EMPRENDEDORA (BANGENTE) C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO DE DESARROLLO ECONÓMICO Y SOCIAL DE VENEZUELA (BANDES)',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCO DE COMERCIO EXTERIOR, C.A. (BANCOEX)',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'MI BANCO, BANCO MICROFINANCIERO, C.A',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);
    DB::table('banco')->insert([
        'nombre' => 'BANCRECER, S.A. BANCO MICROFINANCIERO',
        'nro_cuenta' => 'S/N',
        'status' => '1',
    ]);

    }
}
