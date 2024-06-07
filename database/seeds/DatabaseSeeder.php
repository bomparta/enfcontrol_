<?php

use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([          
            //PersonaSeeder::class,
          //  EntidadSeeder::class, 
           // MunicipioSeeder::class,
         //   ParroquiaSeeder::class,
          //  UsuarioGrupoSeeder::class,
          // NacionalidadSeeder::class,
         //   GeneroSeeder::class,
          //  Estado_civilSeeder::class,
           // Tipo_identificacionSeeder::class,
         //   Tipo_funcionarioSeeder::class,
          //  PaisSeeder::class,
          //  BancoSeeder::class,
            //CodigoCelSeeder::class,
           //CodigoHabSeeder::class,
           // TipoTrabajadorSeeder::class,
            ParentezcoSeeder::class,
          //  UnidadAdscripcionSeeder::class,
      
            ]);
    }
}
