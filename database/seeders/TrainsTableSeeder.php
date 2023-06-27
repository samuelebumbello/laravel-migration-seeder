<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $companies = ['freccirossa' , 'trenitalia' , 'busitalia'];
        for($i = 0; $i < 15; $i++){
          $new_train =  new Train();
          $new_train->company = $faker->randomElement($companies);
          $new_train->company = Str::slug($new_train->company, '-');
          $new_train->departure_station = $faker->city();
          $new_train->arrival_station = $faker->city();
          $new_train->departure_time = $faker->time();
          $new_train->arrival_time = $faker->time();
          $new_train->train_code = $faker->numberBetween(8000, 10000);
          $new_train->carriage_number = $faker->numberBetween(8, 100);
          $new_train->on_time = $faker->boolean();
          $new_train->cancelled = $faker->boolean();

          $new_train->save();
        }
    }
}
