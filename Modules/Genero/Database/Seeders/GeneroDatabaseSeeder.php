<?php

namespace Modules\Genero\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Genero\Entities\Genero;
class GeneroDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $gender = new Genero();
        $gender->nb_genero = 'Masculino';
        $gender->save();

        $gender = new Genero();
        $gender->nb_genero = 'Femenino';
        $gender->save();

    }
}
