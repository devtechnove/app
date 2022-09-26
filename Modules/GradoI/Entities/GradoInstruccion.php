<?php

namespace Modules\GradoI\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GradoInstruccion extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\GradoI\Database\factories\GradoInstruccionFactory::new();
    }
}
