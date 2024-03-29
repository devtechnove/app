<?php

namespace Modules\EstadosVe\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estados extends Model
{
    use HasFactory;

    protected $table = 'estados';
    
    protected static function newFactory()
    {
        return \Modules\EstadosVe\Database\factories\EstadosFactory::new();
    }


     public function estado()
    {

         return $this->HasMany('\Modules\EstadosVe\Entities\Estados', 'id');
    }

    public function municipios()
    {

         return $this->HasMany('\Modules\EstadosVe\Entities\Municipios', 'estado_id');
    }
}
