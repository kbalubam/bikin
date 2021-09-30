<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linksocials')->insert([
            [
                "name"=>"twitter",
                "link"=>"#",
                
            ],
            [
                "name"=>"facebook",
                "link"=>"#",
                
            ],
            [
                "name"=>"instagram",
                "link"=>"#",
                
            ],
            [
                "name"=>"skype",
                "link"=>"#",
                
            ],
            [
                "name"=>"linkedin",
                "link"=>"#",
                
            ],
            ]);
    }
}
