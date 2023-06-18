<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>'Kenzie',
            "email"=>"kenziefubrianto@gmail.com",
            "password"=>bcrypt("12345678")
        ]);
        User::create([
            "name"=>'Ariyo',
            "email"=>"ariyo@gmail.com",
            "password"=>bcrypt("12345678")
        ]);
        User::create([
            "name"=>'Maria',
            "email"=>"maria@gmail.com",
            "password"=>bcrypt("12345678")
        ]);
        User::create([
            "name"=>'Steven',
            "email"=>"steven@gmail.com",
            "password"=>bcrypt("12345678"),
            'level'=>"admin"
        ]);
    }
}
