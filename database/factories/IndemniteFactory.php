<?php

namespace Database\Factories;



use App\Models\Indemnite;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndemniteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indemnite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $indemnites = array('Logement', 'Transport', 'Fonction');
        $montant = array('30000', '15000', '20000');
        return [
            'libelleIndemnite' => $indemnites[array_rand($indemnites, 1)],
            'montant'  => $montant[array_rand($montant, 1)]
        ];
    }
}
