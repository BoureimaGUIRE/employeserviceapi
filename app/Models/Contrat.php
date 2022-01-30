<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;

    //protected $table = "Contrats"; Au cas où le nom de notre table ne respecterait 
    //pas la convention d'écriture Laravel on donne le nom de la table
    protected $guarded = ['*'];

    public function employe()
    {
        return $this->belongsTo(Employe::class); 
    }

    public function poste()
    {
        return $this->belongsTo(Poste::class); 
    }
    
    public function indemnites()
    {
        return $this->hasMany(Indemnite::class); 
    }

}