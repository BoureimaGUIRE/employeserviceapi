<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;

    //protected $table = "Postes"; Au cas où le nom de notre table ne respecterait 
    //pas la convention d'écriture Laravel on donne le nom de la table
    protected $guarded = ['*'];

    public function contrats()
    {
        return $this->hasMany(Contrat::class); 
    }

}