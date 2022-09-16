<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tim;
use App\Models\Trener;

class Igrac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'summoner_name',
        'pozicija',
        'tim_id'
    ];

    public function tim(){
        return $this->belongsTo(Tim::class);
    }

    public function treneri(){
        return $this->hasMany(Trener::class);
    }
}
