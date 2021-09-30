<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletterinfos')->insert([
            [
                "description"=>"Tamen quem nulla quae legam multos aute sint culpa legam noster magna"
            ]
            ]);
    }
}
