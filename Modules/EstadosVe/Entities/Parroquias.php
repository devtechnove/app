<?php

namespace Modules\EstadosVe\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parroquias extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\EstadosVe\Database\factories\ParroquiasFactory::new();
    }

     public function parroquias()
    {

         return $this->HasMany('\Modules\EstadosVe\Entities\Parroquias', 'id');
    }

    public function municipio()
    {
        return $this->belongsTo(\Modules\EstadosVe\Entities\Municipios::class, 'municipio_id');
    }
}
