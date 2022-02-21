<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'code',
        'name',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}