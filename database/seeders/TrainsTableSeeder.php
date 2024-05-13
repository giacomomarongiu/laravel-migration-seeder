<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Genero una data casuale tra il 13 Maggio e il 17
        $timestampDep = mt_rand(strtotime('2024-05-13'), strtotime('2024-05-13'));
        $timestampArr = mt_rand(strtotime('2024-05-15'), strtotime('2024-05-17'));

        // Con questo formato
        $dataDep = date('Y-m-d H:i:s', $timestampDep);
        $dataArr = date('Y-m-d H:i:s', $timestampArr);

        // Array di miei dati da caricare
        $trains = [
            [
                'enterprise' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Firenze SMN',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'A2351',
                'carriages_number' => 4,
                'is_in_time' => 1,
                'is_deleted' => 0
            ],
            [
                'enterprise' => 'Italo',
                'departure_station' => 'Cagliari',
                'arrival_station' => 'Brindisi',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'A551',
                'carriages_number' => 9,
                'is_in_time' => 1,
                'is_deleted' => 0
            ],
            [
                'enterprise' => 'Frecciarossa',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Palermo Centrale',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'A6754',
                'carriages_number' => 1,
                'is_in_time' => 1,
                'is_deleted' => 0
            ],
            [
                'enterprise' => 'France Trains',
                'departure_station' => 'Paris',
                'arrival_station' => 'Firenze SMN',
                'departure_time' => '',
                'arrival_time' => '',
                'train_code' => 'Z0184',
                'carriages_number' => 23,
                'is_in_time' => 1,
                'is_deleted' => 0
            ],

        ];
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
        }
    }
}
