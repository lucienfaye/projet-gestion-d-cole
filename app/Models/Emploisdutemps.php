<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploisdutemps extends Model
{
    use HasFactory;
    protected $casts =[
        'horaire' => 'datetime',
    ];
    public function professeurs()
    {
        return $this->belongsTo(professeurs::class,'matricule');
    }
    public function filieres()
    {
        return $this->belongsTo(filieres::class,'noms_filieres');
    }
    public function modules()
    {
        return $this->belongsTo(modules::class,'nom_modules');
    }
    
}
