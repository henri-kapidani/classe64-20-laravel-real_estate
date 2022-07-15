<?php

use App\House;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    private $cities = [
        'Roma',
        'Firenze',
        'Lecce',
        'Milano',
        'Torino'
    ];

    private $valori_seri = [
        [
            'city'      => 'Roma',
            'street'    => 'via del Corso',
            'price'     => 50200,
            'is_rent'   => true,
            'free_from' => '2022-09-01',
            'rooms'     => 3,
            'surface'   => 120.6
        ],
        [
            'city'      => 'Firenze',
            'street'    => 'via centro',
            'price'     => 506200,
            'is_rent'   => true,
            'free_from' => '2022-08-20',
            'rooms'     => 7,
            'surface'   => 220.6
        ],
        [
            'city'      => 'Venezia',
            'street'    => 'via sud',
            'price'     => 40200,
            'is_rent'   => true,
            'free_from' => '2022-08-01',
            'rooms'     => 8,
            'surface'   => 180.6
        ],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach ($this->valori_seri as $riga) {
            House::create($riga);
        }

        for ($i = 0; $i < 10000; $i++) {
            $house = new House();
            // $house->city = $this->cities[rand(0, 4)];
            $house->city = $faker->city();
            $house->price = rand(10000, 100000);
            $house->street = $faker->address();
            $house->is_rent = !rand(0, 1);
            $house->free_from = $faker->date();
            $house->rooms = rand(1,10);
            $house->surface = 160.8;
            $house->save();
        }
    }
}
