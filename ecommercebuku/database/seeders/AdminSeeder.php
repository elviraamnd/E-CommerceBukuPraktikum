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
            'admin_name' => 'Elvira Amanda',
            'username' => 'admin_elvira',
            'password' => Hash::make('password'),
            'admin_address' => 'Jl. London ',
            'phone' => '08911111133'
        ]);
    }
}