<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesage',
    ];

    public function category():BelongsTo{
        return $this->BelongsTo(Observation::class,'category');
    }
    public function user():BelongsTo{
        return $this->BelongsTo(Observation::class,'owner');
    }

    public function computer():BelongsTo{
        return $this->belongsTo(Observation::class,'computer');
    }


}
