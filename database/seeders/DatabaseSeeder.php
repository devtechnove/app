<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(\Modules\Roles\Database\Seeders\RolesAndPermissionsTableSeeder::class);
        $this->call(\Modules\Empresa\Database\Seeders\EmpresaTableSeeder::class);
        $this->call(\Modules\Pais\Database\Seeders\PaisDatabaseSeeder::class);
        $this->call(\Modules\Genero\Database\Seeders\GeneroDatabaseSeeder::class);
        $this->call(\Modules\Estado\Database\Seeders\EstadoDatabaseSeeder::class);
        $this->call(\Modules\GradoM\Database\Seeders\GradoMDatabaseSeeder::class);
        $this->call(\Modules\Nacionalidad\Database\Seeders\NacionalidadDatabaseSeeder::class);
        $this->call(\Modules\GradoI\Database\Seeders\GradoIDatabaseSeeder::class);
        $this->call(\Modules\TipoS\Database\Seeders\TipoSDatabaseSeeder::class);
        $this->call(\Modules\TipoL\Database\Seeders\TipoLDatabaseSeeder::class);


    }
}
