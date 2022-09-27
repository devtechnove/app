<?php

namespace Modules\EstadosVe\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ciudad extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\EstadosVe\Database\factories\CiudadFactory::new();
    }


    public function estado(){
        return $this->belongsTo(\Modules\EstadosVe\Entities\Estados::class, 'estado_id');
    }


    public function getDisplayCapitalAttribute()
    {
        return $this->capital == 1 ? 'SI' : 'NO';
    }


    public function scopeBuscarCapital($query, $id){
        return $query->where('capital','=', $id)->orderBy('id','ASC');
    }
}
