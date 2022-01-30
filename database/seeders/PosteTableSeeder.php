<?php

namespace Database\Seeders;

use App\Models\Poste;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;


class PosteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postes = new Collection(['Comptable', 'Machiniste', 'Chauffeur', 'Infographe', 'Informaticien', 'Commercial', 'Sécretaire', 'Gardien', 'Coursier', 'RH']);
        
        foreach ($postes as $postee)
        {
            $poste = new Poste();
            $poste->libellePoste = $postee;
            $poste->save();
        }
    }
}
