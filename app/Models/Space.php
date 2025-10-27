<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id'
    ];

    //* Relación hacia Users (1:N)
    public function user() {
        return $this->belongsTo(User::class);
    }

    //* Relación hacia entradas (1:N)
    public function entries() {
        return $this->hasMany(Entry::class);
    }
}
