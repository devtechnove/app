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
         // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(\Modules\Roles\Database\Seeders\RolesAndPermissionsTableSeeder::class);
        //$this->call(\Modules\Usuarios\Database\Seeders\UsuariosTableSeeder::class);
        $this->call(\Modules\Empresa\Database\Seeders\EmpresaTableSeeder::class);
        $this->call(\Modules\Pais\Database\Seeders\PaisDatabaseSeeder::class);
        $this->call(\Modules\Genero\Database\Seeders\GeneroDatabaseSeeder::class);
        $this->call(\Modules\Estado\Database\Seeders\EstadoDatabaseSeeder::class);
        $this->call(\Modules\GradoM\Database\Seeders\GradoMDatabaseSeeder::class);
    }
}
