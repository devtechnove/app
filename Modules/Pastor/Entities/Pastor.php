<?php

namespace Modules\Pastor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pastor extends Model
{
    use HasFactory;

    protected $table = 'pastor';
    
    protected static function newFactory()
    {
        return \Modules\Pastor\Database\factories\PastorFactory::new();
    }



    /**
     * @return object
     */
    public function empEstado(){
        /**
         *  return department which belongs to an employee.
         *  first parameter is the model and second is a
         *  foreign key.
         */
        return $this->belongsTo('\Modules\EstadosVe\Entities\Estados','estado_id');
    }

    /**
     * @return object
     */
    public function empEstadoCivil(){
        return $this->belongsTo('\Modules\EstadosVe\Entities\Estado','estado_civil_id');
    }

    /**
     * @return object
     */
    public function empGenero(){
        return $this->belongsTo('\Modules\Genero\Entities\Genero','genero_id');
    }

    /**
     * @return object
     */
    public function empGradoInstruccion(){
        return $this->belongsTo('\Modules\GradoI\Entities\GradoInstruccion','grado_instruccion_id');
    }

    /**
     * @return object
     */
    public function empGradoMinisterial(){
        return $this->belongsTo('\Modules\GradoM\Entities\GradoMinisterial','grado_ministerial_id');
    }

    /**
     * @return object
     */
    public function empNacionalidad(){
        return $this->belongsTo('\Modules\Nacionalidad\Entities\Nacionalidad','nacionalidad_id');
    }

    /**
     * @return object
     */
    public function empPais(){
        return $this->belongsTo('\Modules\Pais\Entities\Pais','lugar_nacimiento_id');
    }

        /**
     * @return object
     */
    public function empTipoSangre(){
        return $this->belongsTo('\Modules\TipoS\Entities\TipoSangre','tipo_sangre_id');
    }

     public function getDisplayStatusAttribute()
    {
        return $this->status == 1 ? 'Activo' : 'Inactivo';
    }
}
