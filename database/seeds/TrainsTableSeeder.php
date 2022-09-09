<?php

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains = [
            [
                'business_company' => 'Trenitalia',
                'departure_station' => 'Roma Tiburtina',
                'arrival_station' => 'Napoli Centrale',
                'departure_hour'=>'16:20',
                'arrival_hour'=>'18:20',
                'pnr'=>'AS123R',
                'carriages'=>'6',
                'on_time'=> 1,
                'cancelled'=> 0,
            ],
            [
                'business_company' => 'Italo treno',
                'departure_station' => 'Padova',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'departure_hour'=>'17:35',
                'arrival_hour'=>'19:20',
                'pnr'=>'PD987Y',
                'carriages'=>'10',
                'on_time'=> 0,
                'cancelled'=> 0,
            ],
            [
                'business_company' => 'Frecciarossa',
                'departure_station' => 'Udine',
                'arrival_station' => 'Ferrara',
                'departure_hour'=>'20:09',
                'arrival_hour'=>'00:19',
                'pnr'=>'LV645U',
                'carriages'=>'8',
                'on_time'=> 0,
                'cancelled'=> 1,
            ],
        ];

        
    }
}
