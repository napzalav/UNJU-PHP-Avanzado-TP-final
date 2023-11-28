<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    protected $table = 'infracciones';

    protected $fillable = [
        'auto_id',
        'fecha',
        'descripcion',
        'tipo',
    ];

    // Relación con el modelo Auto
    public function auto()
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }
}
