<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
    ];

    protected $table = 'proyectos';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($proyecto) {
            $proyecto->nombre = strtoupper($proyecto->nombre);
        });
    }
}
