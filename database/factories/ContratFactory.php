<?php

namespace Database\Factories;


use App\Models\Contrat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contrat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $visaContratSiEtranger = array('Non Etranger', 'Etranger Pas Visé', 'Etranger Visé');
        $typeContrat = array('CDD', 'CDI');
        $categorie = array('A', 'B', 'C', 'D');
        $salaireBase = array('500000', '400000', '300000', '200000', '100000', '50000');
        $modePaiement = array('En Espece', 'Caisse Populaire', 'Banque');
        return [
            'numeroContrat' => $this->faker->numberBetween(200, 999),
            'typeContrat' => $typeContrat[array_rand($typeContrat, 1)],
            'categorie' => $categorie[array_rand($categorie, 1)],
            'salaireBase'  => $salaireBase[array_rand($salaireBase, 1)],
            'modePaiement' => $modePaiement[array_rand($modePaiement, 1)],
            'visaContratSiEtranger' => $visaContratSiEtranger[array_rand($visaContratSiEtranger, 1)],
            'dateDebut' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'poste_id' => rand(1, 10)
        ];
    }
}
