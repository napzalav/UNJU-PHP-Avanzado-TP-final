<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    // protected $table = 'autos';
    // protected $primaryKey="id";
    // protected $fileable=['titular_id','marca', 'modelo', 'patente', 'tipo'];
    // protected $hidde=['id'];

    // public function titular(){
    //     return $this->hasOne(Titular::class,'id', 'titular_id');
    // }
}

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

// class Auto extends Model
// {
//     use HasFactory;
//     protected $table = 'autos';
//     protected $fillable = ['marca','modelo', 'patente', 'tipo'];
//     protected $guarded= ['id','created_at','update_at'];

//     public function titulares(){
//         return $this->belongsTo(Titular::class);
//     }
//     public function infracciones(){
//         return $this->hasMany(Infraccion::class);
//     }
// }