<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            'name' => 'Md Abdul Alim',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('abdulalim20'),
            'phone' =>'01760999114',
        ]);
    }
}