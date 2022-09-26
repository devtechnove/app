<?php

namespace Modules\GradoI\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GradoIDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Primaria';
        $gradoIns->save();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Bachiller';
        $gradoIns->save();


        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='TSU';
        $gradoIns->save();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Ingeniero';
        $gradoIns->save();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Licenciado';
        $gradoIns->save();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Majister';
        $gradoIns->save();

        $gradoIns = new \Modules\GradoI\Entities\GradoInstruccion();
        $gradoIns->nb_grado_instruccion='Doctorado';
        $gradoIns->save();
    }
}
