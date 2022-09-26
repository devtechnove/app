<?php

namespace Modules\GradoM\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GradoMDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $gradoMin= new \Modules\GradoM\Entities\GradoMinisterial();
        $gradoMin->nb_grado_ministerial='Colaborador';
        $gradoMin->save();

        $gradoMin= new \Modules\GradoM\Entities\GradoMinisterial();
        $gradoMin->nb_grado_ministerial='Laico';
        $gradoMin->save();


        $gradoMin= new \Modules\GradoM\Entities\GradoMinisterial();
        $gradoMin->nb_grado_ministerial='Licenciado';
        $gradoMin->save();


        $gradoMin= new \Modules\GradoM\Entities\GradoMinisterial();
        $gradoMin->nb_grado_ministerial='Ministro Ordenado';
        $gradoMin->save();

    }
}
