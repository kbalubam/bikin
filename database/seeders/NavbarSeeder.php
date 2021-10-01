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
                "lien" => "Home",
            ],
            [
                "lien" => "About",
            ],
            [
                "lien" => "Services",
            ],
            [
                "lien" => "Portfolio",
            ],
            [
                "lien" => "Team",
            ],
            [
                "lien" => "Contact",
            ],
            [
                "lien" => "Get Started",
            ],

        ]);
    }
}
