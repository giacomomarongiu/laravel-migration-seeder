<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Seeder;

class SecondTrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->enterprise = $faker->randomElement(['Italo', 'Trenitalia', 'Itaca', 'France Trains']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeInInterval('now', '+1 days')->format('Y-m-d H:i:s');
            ;
            $train->arrival_time = $faker->dateTimeInInterval('+1 days', '+3 days')->format('Y-m-d H:i:s');
            ;
            $train->train_code = $faker->bothify('??##');
            $train->carriages_number = $faker->numberBetween(0, 20);
            $train->is_in_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();
            $train->save();
        }


    }
}
