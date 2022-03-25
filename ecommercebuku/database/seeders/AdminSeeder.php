<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

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
            'admin_name' => 'Johnny',
            'username' => 'adminjohnny@gmail.com',
            'password' => Hash::make('password'),
            'admin_address' => 'Jl. Seoul ',
            'phone' => '08666666666',
        ]);
    }
}