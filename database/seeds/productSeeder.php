<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();

        for($i =0; $i < 100; $i++){


            Product::create([
                "title"=> $faker->word(),
                "description"=>$faker->sentence()
            ]);
        }
    }
}