<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesage',
    ];

    public function Category():BelongsTo{
        return $this->belongsTo(Observation::class,'category');
    }
    public function User():BelongsTo{
        return $this->belongsTo(Observation::class,'owner');
    }
    public function Computer():BelongsTo{
        return $this->belongsTo(Observation::class,'computer');
    }


}
