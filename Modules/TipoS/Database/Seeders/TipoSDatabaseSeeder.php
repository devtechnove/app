<?php

namespace Modules\TipoS\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TipoSDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='Sin recordar';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='A Positiva';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='A Negativo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='B Positivo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='B Negativo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='O Positivo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='O Negativo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='AB Positivo';
        $tipo_sangre->save();

        $tipo_sangre= new \Modules\TipoS\Entities\TipoSangre();
        $tipo_sangre->nb_tipo_sangre ='AB Negativo';
        $tipo_sangre->save();
    }
}
