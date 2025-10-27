<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'description',
        'category_id'
    ];

    //* Relación hacia Spaces (1:N)
    public function space() {
        return $this->belongsTo(Space::class);
    }

    //* Relación hacia Source (1:1)
    public function source() {
        return $this->hasOne(Source::class);
    }

    //* Relación hacia Questions (1:N)
    public function questions() {
        return $this->hasMany(Question::class);
    }
}
