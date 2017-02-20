<?php

use Illuminate\Database\Seeder;

class ShoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            $j = $i + 1;
            DB::table('shoes')->insert([ //,
                'size' => $faker->biasedNumberBetween(36, 40),
                'type' => $faker->word,
                'color' => $faker->word,
                'price' => $faker->randomDigitNotNull,
                'user_id' => $faker->biasedNumberBetween(1, 5),
                'filename' => '/images' . '/' . $j.'.'.'jpg',

            ]);
        }
    }
}
