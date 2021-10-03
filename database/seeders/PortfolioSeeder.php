<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
           [ "img" => "portfolio-1.jpg",
            "soustitre" => "App 1",
            "soustitre2" => "app",
            "lien" => "portfolio-1.jpg",
           ],
           [ "img" => "portfolio-2.jpg",
            "soustitre" => "Web 3",
            "soustitre2" => "web",
            "lien" => "portfolio-2.jpg",
           ],
           [ "img" => "portfolio-3.jpg",
            "soustitre" => "App 2",
            "soustitre2" => "app",
            "lien" => "portfolio-3.jpg",
           ],
           [ "img" => "portfolio-4.jpg",
            "soustitre" => "Card 2",
            "soustitre2" => "card",
            "lien" => "portfolio-4.jpg",
           ],
           [ "img" => "portfolio-5.jpg",
            "soustitre" => "Web 2",
            "soustitre2" => "web",
            "lien" => "portfolio-5.jpg",
           ],
           [ "img" => "portfolio-6.jpg",
            "soustitre" => "App 3",
            "soustitre2" => "app",
            "lien" => "portfolio-6.jpg",
           ],
           [ "img" => "portfolio-7.jpg",
            "soustitre" => "Card 1",
            "soustitre2" => "card",
            "lien" => "portfolio-7.jpg",
           ],
           [ "img" => "portfolio-8.jpg",
            "soustitre" => "Card 3",
            "soustitre2" => "card",
            "lien" => "portfolio-8.jpg",
           ],
           [ "img" => "portfolio-9.jpg",
            "soustitre" => "Web 3",
            "soustitre2" => "web",
            "lien" => "portfolio-9.jpg",
           ],


        ]);
    }
}
