<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //$fillable: evitamos asignación masiva
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    use HasFactory;
}
