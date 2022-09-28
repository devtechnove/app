<?php

namespace Modules\EstadosVe\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipios extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\EstadosVe\Database\factories\MunicipiosFactory::new();
    }

    public function parroquias()
    {

         return $this->HasMany('\Modules\EstadosVe\Entities\Parroquias', 'municipio_id');
    }


     public function estado(){
        return $this->belongsTo(\Modules\EstadosVe\Entities\Estados::class, 'estado_id');
    }
}
