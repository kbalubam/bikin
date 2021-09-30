<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"=> "elvis",
                "email" => "elvis@outlook.com",
                "password" => Hash::make('test'),
                "role_id"=>1,
                "created_at"=> now()
            ],
            [
                "name"=> "kevin",
                "email" => "kevin@outlook.com",
                "password" => Hash::make('test'),
                "role_id"=>2,
                "created_at"=> now()
            ],
            [
                "name"=> "ali",
                "email" => "ali@outlook.com",
                "password" => Hash::make('test'),
                "role_id"=>3,
                "created_at"=> now()
            ],

        ]);
    }
}
