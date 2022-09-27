<?php

namespace Modules\Estado\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estadoc';
    
    protected static function newFactory()
    {
        return \Modules\Estado\Database\factories\EstadoFactory::new();
    }
}
