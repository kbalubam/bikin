<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "name"=>"bx-map",
                "linksocial_id"=>null
            ],
            [
                "name"=>"bx-envelope",
                "linksocial_id"=>null
                

            ],
            [
                "name"=>"bx-phone-call",
                "linksocial_id"=>null
            ],
            [
                "name"=>"bxl-twitter",
                 "linksocial_id"=>1
            ],
            [
                "name"=>"bxl-facebook",
                "linksocial_id"=>2
            ],
            [
                "name"=>"bxl-instagram",
                "linksocial_id"=>3
            ],
            [
                "name"=>"bxl-skype",
                "linksocial_id"=>4
            ],
            [
                "name"=>"bxl-linkedin",
                "linksocial_id"=>5
            ],
        ]);
    }
}
