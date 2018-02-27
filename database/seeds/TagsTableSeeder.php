<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Tag::create([
        	'name' => 'match',
  		]);

      	\App\Tag::create([
        	'name' => 'highlights',
  		]);

      	\App\Tag::create([
        	'name' => 'promo',
  		]);
    }
}
