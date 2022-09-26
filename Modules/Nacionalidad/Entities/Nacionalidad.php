<?php

namespace Modules\Nacionalidad\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nacionalidad extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Nacionalidad\Database\factories\NacionalidadFactory::new();
    }
}
