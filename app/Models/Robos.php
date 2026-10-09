<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pecas;

class Robos extends Model
{
    protected $fillable = [
        'model',
    ];

    public function pecas(): HasMany {
        return $this->hasMany(Pecas::class);
    }
}
