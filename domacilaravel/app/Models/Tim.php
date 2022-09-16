<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Igrac;

class Tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_tima',
        'region',
        'drzava',
        'vlasnik'
    ];

    public function igraci(){
        return $this->hasMany(Igrac::class);
    }
}
