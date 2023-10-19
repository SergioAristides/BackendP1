<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Computer extends Model
{
    // Este trait se utiliza para generar datos de prueba de manera rápida y sencilla para el modelo.
    use HasFactory;
    //solo los que puede ser cambiado popr el usuario
    //$fillable especifica qué campos del modelo pueden ser asignados de manera masiva (es decir, utilizando el método create o update en un solo paso). En este caso, los campos name, brand, ram, y cpu son los únicos campos que pueden ser asignados de esta manera
    protected $fillable = [
        'name',
        'brand',
        'ram',
        'cpu',
    ];
    public function user():BelongsTo{
        return $this->belongsTo(Computer::class,'owner');
    }
    public function observations():HasMany{
        return $this->hasMany(Observation::class,'computer');
    }


}
