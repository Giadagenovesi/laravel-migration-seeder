<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->data_di_partenza = $faker->randomElement(['25 Maggio 2023','25 Maggio 2023','25 Maggio 2023', '12 Giugno 2023', '30 Maggio 2023', '28 Maggio 2023', '15 Luglio 2023', '14 Giugno 2023', '16 Giugno 2023', '15 Agosto 2023']);
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_Treno = $faker->bothify('?##?##??#');
            $train->numero_Carrozze = $faker->numberBetween(1, 10);
            $train->in_orario = $faker->randomElement([true, false]);
            $train->cancellato = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
