<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'state_id',
        'name',
        'county',
        'latitude',
        'longitude'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
