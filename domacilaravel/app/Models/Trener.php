<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Igrac;

class Trener extends Model
{
    use HasFactory;

    protected $fillable =[
        'ime',
        'prezime',
        'nickname',
        'igrac_id'
    ];

    public function igrac(){
        return $this->belongsTo(Igrac::class);
    }
}
