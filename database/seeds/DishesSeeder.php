<?php

use Illuminate\Database\Seeder;
use App\Main;
use App\Dish;
use Faker\Factory as Faker;
class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     protected $dish;
     protected $faker;
     public function __construct(Dish $dish, Faker $faker) {
         $this->dish = $dish;
         $this->faker = $faker;

     }
    public function run()
    {
        $faker= $this->faker->create();

         for ($i=1; $i < 10; $i++) {
         $this->dish->create([
          'title' => $faker->word(),
          'description' => $faker->word(),
          'image_url' => $faker->imageUrl($width = 640, $height = 480, 'food'),
          'price' => $faker->buildingNumber(),
          'main_id' =>rand(1,4),
        ]);
       }
    }


}
