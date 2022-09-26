<?php

namespace Modules\GradoM\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GradoMinisterial extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\GradoM\Database\factories\GradoMinisterialFactory::new();
    }
}
