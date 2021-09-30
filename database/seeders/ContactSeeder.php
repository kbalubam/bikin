<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "titre"=>"Our Address",
                "sousTitre"=>"A108 Adam Street, New York, NY 535022",
                "infos"=>null,
                "icon_id"=>1

            ],
            [
                "titre"=>"",
                "sousTitre"=>"",
                "infos"=>null,
                "icon_id"=>2
            ],
            [
                "titre"=>"",
                "sousTitre"=>"",
                "infos"=>null,
                "icon_id"=>3

            ],
        ]);
    }
}
