<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    protected $casts =[
        'datenaiss' => 'date',
    ];
    public function filieres()
    {
        return $this->belongsTo(filieres::class,'noms_filieres');
    }
}
