<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Location::create([
        	'name' => 'New York City',
  		]);

      	\App\Location::create([
        	'name' => 'Los Angeles',
  		]);

      	\App\Location::create([
        	'name' => 'Kansas City',
  		]);
    }
}
