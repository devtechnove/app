<?php

namespace Modules\TipoL\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TipoLDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $tipo_local= new \Modules\TipoL\Entities\Tipolocal();
        $tipo_local->nb_nombre ='Alquilado';
        $tipo_local->save();


        $tipo_local= new \Modules\TipoL\Entities\Tipolocal();
        $tipo_local->nb_nombre ='Propio';
        $tipo_local->save();
    }
}
