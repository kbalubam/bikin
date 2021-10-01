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
           [ "img" => "img/portfolio/portfolio-1.jpg",
            "soustitre" => "App 1",
            "soustitre2" => "App",
            "lien" => "asset('img/portfolio/portfolio-1.jpg",
           ],
           [ "img" => "portfolio/portfolio-2.jpg",
            "soustitre" => "Web 3",
            "soustitre2" => "Web",
            "lien" => "asset('img/portfolio/portfolio-2.jpg')",
           ],
           [ "img" => "portfolio/portfolio-3.jpg",
            "soustitre" => "App 2",
            "soustitre2" => "App",
            "lien" => "asset('img/portfolio/portfolio-3.jpg')",
           ],
           [ "img" => "portfolio/portfolio-4.jpg",
            "soustitre" => "Card 2",
            "soustitre2" => "Card",
            "lien" => "asset('img/portfolio/portfolio-4.jpg')",
           ],
           [ "img" => "portfolio/portfolio-5.jpg",
            "soustitre" => "Web 2",
            "soustitre2" => "Web",
            "lien" => "asset('img/portfolio/portfolio-5.jpg')",
           ],
           [ "img" => "portfolio/portfolio-6.jpg",
            "soustitre" => "App 3",
            "soustitre2" => "App",
            "lien" => "asset('img/portfolio/portfolio-6.jpg')",
           ],
           [ "img" => "portfolio/portfolio-7.jpg",
            "soustitre" => "Card 1",
            "soustitre2" => "Card",
            "lien" => "asset('img/portfolio/portfolio-7.jpg')",
           ],
           [ "img" => "portfolio/portfolio-8.jpg",
            "soustitre" => "Card 3",
            "soustitre2" => "Card",
            "lien" => "asset('img/portfolio/portfolio-8.jpg')",
           ],
           [ "img" => "portfolio/portfolio-9.jpg",
            "soustitre" => "Web 3",
            "soustitre2" => "Web",
            "lien" => "asset('img/portfolio/portfolio-9.jpg')",
           ],


        ]);
    }
}
