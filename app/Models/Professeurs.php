<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeurs extends Model
{
    // protected $casts =['modules' => 'nom_modules'];
    protected $casts =[
        'datenaiss' => 'date',
    ];
    protected $fillable=["matricule"];
    public function modules()
    {
        return $this->belongsTo(modules::class,'nom_modules');
    }



}
