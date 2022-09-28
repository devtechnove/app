<?php

namespace Modules\Pastor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Pastor\Database\factories\ActividadFactory::new();
    }

    public function pastor()
    {
        return $this->belongsTo(\Modules\Pastor\Entities\Pastor::class, 'pastor_id', 'id');
    }
}
