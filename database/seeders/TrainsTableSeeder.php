<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Train;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*         // Genero una data casuale tra il 13 Maggio e il 17
                $timestampDep = mt_rand(strtotime('2024-05-13'), strtotime('2024-05-13'));
                $timestampArr = mt_rand(strtotime('2024-05-15'), strtotime('2024-05-17'));

                // Con questo formato
                $dataDep = date('Y-m-d H:i:s', $timestampDep);
                $dataArr = date('Y-m-d H:i:s', $timestampArr);

                // Array di miei dati da caricare
                $trains = config('db.trains');
                //dd($trains);

                foreach ($trains as $train) {
                    $newTrain = new Train();
                    $newTrain->enterprise = $train['enterprise'];
                    $newTrain->departure_station = $train['departure_station'];
                    $newTrain->arrival_station = $train['arrival_station'];
                    $newTrain->departure_time = $dataDep;
                    $newTrain->arrival_time = $dataArr;
                    $newTrain->train_code = $train['train_code'];
                    $newTrain->carriages_number = $train['carriages_number'];
                    $newTrain->is_in_time = $train['is_in_time'];
                    $newTrain->is_deleted = $train['is_deleted'];
                    $newTrain->save();
                } */

        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->enterprise = $faker->randomElement(['Italo', 'Trenitalia', 'Itaca', 'France Trains']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeInInterval('now', '+1 days')->format('Y-m-d H:i:s');;
            $train->arrival_time = $faker->dateTimeInInterval('+1 days', '+3 days')->format('Y-m-d H:i:s');;
            $train->train_code = $faker->bothify('??##');
            $train->carriages_number = $faker->numberBetween(0, 20);
            $train->is_in_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();
            $train->save();
        }


    }
}
