<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name' => 'Bobby Heenan',
            'email' => 'bobby.heenan@thebrain.com',
            'password' => bcrypt('humanoids1'),
      	]);
    }
}
