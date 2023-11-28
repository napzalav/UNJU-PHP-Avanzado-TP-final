<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'autos';

    protected $fillable = [
        'titular_id',
        'marca',
        'modelo',
        'patente',
        'tipo'
    ];

    public function titular()
    {
        return $this->belongsTo(Titular::class);
    }

    // Esta relación indica que un automotor puede tener muchas infracciones. El segundo argumento 'auto_id' especifica la clave foránea en la tabla de infracciones que se utiliza para asociarlas a un automotor específico
    public function infracciones()
    {
        return $this->hasMany(Infraccion::class, 'auto_id');
    }
}
