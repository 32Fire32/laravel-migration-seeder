<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 20; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->randomElement(['Trenitalia','Italo','TrainDream']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_day = $faker->dateTimeBetween('-1 week','+1 week')->format('Y-m-d');
            $new_train->arrival_day = $faker->dateTimeBetween('-1 week','+1 week')->format('Y-m-d');
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = rand(1000, 9999);
            $new_train->train_carriage_number = rand(1, 99);
            $new_train->onTime = rand(0, 1);
            $new_train->cancelled = rand(0, 1);
            $new_train->save();

        }
    }
}
