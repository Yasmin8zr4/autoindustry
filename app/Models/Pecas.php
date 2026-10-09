<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Robos;

class Pecas extends Model
{
    protected $fillable = [
        'name',
        'fabricante',
        'preco',
        'quantidade',
        'num_de_serie',
        'robos_id',
        'vida_util',
        'corredor',
        'prateleira',
    ];

    public function robos(): BelongsTo {
        return $this->belongsTo(Robos::class);
    }

}
