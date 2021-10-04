<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                
                "name" => "Home",
                "lien"=>"#hero"
            ],
            [
                "name" => "About",
                 "lien"=>"#about"
            ],
            [
                "name" => "Services",
                 "lien"=>"#services"
            ],
            [
                "name" => "Portfolio",
                 "lien"=>"#portfolio"

            ],
            [
                "name" => "Team",
                 "lien"=>"#team"
            ],
            [
                "name" => "Contact",
                 "lien"=>"#contact"
            ],
            [
                "name" => "Get Started",
                 "lien"=>"#about"
            ],

        ]);
    }
}
