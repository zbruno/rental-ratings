<?php

use Illuminate\Database\Seeder;
use App\Models\Rental;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rental::truncate();
        $this->call('RentalsSeeder');
    }
}
