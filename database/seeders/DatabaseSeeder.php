<?php

namespace Database\Seeders;

use App\Models\Contrat;
use App\Models\Employe;
use App\Models\Indemnite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PosteTableSeeder::class);
        Employe::factory(10)
                ->has(Contrat::factory()->has(Indemnite::factory()))
                ->create();
    }
}
