<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'entry_id',
        'status'
    ];

    //* Relación hacia Entries (1:N)
    public function entry() {
        return $this->belongsTo(Entry::class);
    }

    //* Relación hacia Answer (1:N)
    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
