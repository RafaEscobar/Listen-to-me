<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'path',
        'duration',
        'entry_id'
    ];

    //* Relación hacia Entry (1:1)
    public function entry() {
        return $this->belongsTo(Entry::class);
    }
}
