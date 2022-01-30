<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sexe = array('H', 'F');
        $typePieceIdentite = array('CNIB', 'PASSEPORT', 'CNI');
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'sexe' => $sexe[array_rand($sexe, 1)],
            'dateNaissance' => $this->faker->dateTimeBetween('1950-01-01', '2000-01-01'),
            'lieuNaissance' => $this->faker->city()." ".$this->faker->country(),
            'typePieceIdentite'  => $typePieceIdentite[array_rand($typePieceIdentite, 1)],
            'numPieceIdentite'  => $this->faker->creditCardNumber(),
            'telephone1'  => $this->faker->phoneNumber(),
            'telephone2'  => $this->faker->phoneNumber(),
            'nationalite' => $this->faker->country(),
            'adresseDomicile' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
