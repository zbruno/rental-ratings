<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Rental;

class RentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 25) as $index)
        {
            Rental::create([
                'renter_id' => $faker->randomDigitNotNull,
                'landlord_id' => $faker->randomDigitNotNull,
                'rating' => $faker->numberBetween($min = 1, $max = 5),
                'name' => $faker->company,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->stateAbbr,
                'zipcode' => $faker->postcode,
                'image' => $faker->imageUrl($width = 250, $height = 250),
                'beds' => $faker->numberBetween($min = 0, $max = 10),
                'baths' => $faker->numberBetween($min = 1, $max = 10),
                'square_feet' => $faker->numberBetween($min = 200, $max = 10000)
            ]);
        }
    }
}
