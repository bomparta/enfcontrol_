<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadAdscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('ubic_administrativa')->insert([ 'id' => 1,'descripcion' => 'PRESIDENCIA/DIRECCIÓN GENERAL','orden_jerarquico' => '1','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 2,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA','orden_jerarquico' => '19','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 3,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE ADMINISTRACIÓN','orden_jerarquico' => '20','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 4,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE PLANIFICACIÓN Y PRESUPUESTO','orden_jerarquico' => '21','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 5,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE RECURSOS HUMANOS','orden_jerarquico' => '22','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 6,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE TECNOLOGÍA','orden_jerarquico' => '23','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 7,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE CONTRATACIONES PÚBLICAS','orden_jerarquico' => '24','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 8,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO ','orden_jerarquico' => '5','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 9,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO / COORDINACIÓN DE POSTGRADO','orden_jerarquico' => '9','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 10,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO / COORDINACIÓN DE CONVENIOS, PROYECTOS Y EXTENSIONES','orden_jerarquico' => '0','status' => '0', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 11,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO / COORDINACIÓN DE ESTUDIOS GENERALES','orden_jerarquico' => '7','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 12,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO / COORDINACIÓN DE INVESTIGACIÓN','orden_jerarquico' => '6','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 13,'descripcion' => 'DIRECCIÓN DE SECRETARÍA GENERAL','orden_jerarquico' => '10','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 14,'descripcion' => 'DIRECCIÓN DE SECRETARÍA GENERAL / COORDINACIÓN DE INGRESO, PERMANENCIA Y EGRESO','orden_jerarquico' => '11','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 15,'descripcion' => 'DIRECCIÓN DE SECRETARÍA GENERAL / COORDINACIÓN DE  ARCHIVO Y DOCUMENTACIÓN','orden_jerarquico' => '12','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 16,'descripcion' => 'DIRECCIÓN DE SECRETARÍA GENERAL / COORDINACIÓN DE ESTADISTICA','orden_jerarquico' => '13','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 17,'descripcion' => 'DIRECCIÓN DE PROMOCIÓN Y DIFUSIÓN','orden_jerarquico' => '14','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 18,'descripcion' => 'DIRECCIÓN DE PROMOCIÓN Y DIFUSIÓN / COORDINACIÓN DE PROMOCIÓN','orden_jerarquico' => '15','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 19,'descripcion' => 'DIRECCIÓN DE PROMOCIÓN Y DIFUSIÓN / COORDINACIÓN DE VICULACION SOCIAL','orden_jerarquico' => '17','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 20,'descripcion' => 'AUDITORIA INTERNA','orden_jerarquico' => '2','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 21,'descripcion' => 'CONSULTORIA JURÍDICA','orden_jerarquico' => '18','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 22,'descripcion' => 'DIRECCIÓN DE GESTIÓN ADMINISTRATIVA / COORDINACIÓN DE CONTRATACIONES','orden_jerarquico' => '0','status' => '0', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 23,'descripcion' => 'DIRECCIÓN DE INVESTIGACIÓN Y POSTGRADO /COORDINACIÓN DE DESARROLLO REGIONAL','orden_jerarquico' => '8','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 24,'descripcion' => 'AUDITORIA INTERNA / COORDINACIÓN DE CONTROL POSTERIOR','orden_jerarquico' => '3','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 25,'descripcion' => 'AUDITORIA INTERNA / COORDINACIÓN DE DETERMINACIÓN DE RESPONSABILIDADES','orden_jerarquico' => '4','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 26,'descripcion' => 'DIRECCIÓN DE PROMOCIÓN Y DIFUSIÓN / COORDINACIÓN DIFUSION','orden_jerarquico' => '16','status' => '1', ]);
DB::table('ubic_administrativa')->insert([ 'id' => 27,'descripcion' => 'TODAS','orden_jerarquico' => '0','status' => '1', ]);

    }
}
