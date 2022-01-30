<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;

    protected $guarded = ['*'];

    //protected $table = "Employes"; Au cas où le nom de notre table ne respecterait 
    //pas la convention d'écriture Laravel on donne le nom de la table


    public function contrats()
    {
        return $this->hasMany(Contrat::class); 
    }

}