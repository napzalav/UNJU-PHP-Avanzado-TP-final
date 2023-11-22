<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    // use HasFactory;
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'domicilio',
        // '_token',
    ];
    protected $table = 'titulares';
}
