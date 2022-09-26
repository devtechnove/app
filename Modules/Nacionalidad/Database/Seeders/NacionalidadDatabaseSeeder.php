<?php

namespace Modules\Nacionalidad\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NacionalidadDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $Nacionalidad= new \Modules\Nacionalidad\Entities\Nacionalidad();
        $Nacionalidad->nb_nacionalidad='Venezolano';
        $Nacionalidad->save();

        $Nacionalidad= new \Modules\Nacionalidad\Entities\Nacionalidad();
        $Nacionalidad->nb_nacionalidad='Extranjero';
        $Nacionalidad->save();
    }
}
