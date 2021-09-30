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
                "titre" => "Bikin",
                "lien1" => "Home",
                "lien2" => "About",
                "lien3" => "Services",
                "lien4" => "Portfolio",
                "lien5" => "Team",
                "lien6" => "Contact",
                "lien7" => "Get Started",



            ]
        ]);
    }
}
