<?php

namespace Modules\Estado\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Estado\Entities\Estado;

class EstadoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $estadoCivil = new Estado();
        $estadoCivil->nb_estado_civil = 'Soltero(a)';
        $estadoCivil->save();

        $estadoCivil = new Estado();
        $estadoCivil->nb_estado_civil = 'Casado(a)';
        $estadoCivil->save();

        $estadoCivil = new Estado();
        $estadoCivil->nb_estado_civil = 'Viudo(a)';
        $estadoCivil->save();
    }
}
