<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "titreSec"=>"Corporis voluptates sit",
                "descriptionSec"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
                "icon_id"=>1,
                "btn"=>"About us"
                
            ],
            [
                "titreSec"=>"Ullamco laboris nisi",
                "descriptionSec"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
                "icon_id"=>2,
                "btn"=>null
            ],
            [
                "titreSec"=>"Labore consequatur",
                "descriptionSec"=>"Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
                "icon_id"=>3,
                "btn"=>null
            ],
            [
                "titreSec"=>"Beatae veritatis",
                "descriptionSec"=>"Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
                "icon_id"=>4,
                "btn"=>null
            ],
        ]);
    }
}
