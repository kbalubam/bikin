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
                "titre"=>"Email Us",
                "sousTitre"=>"info@example.com",
                "infos"=>"contact@example.com",
                "icon_id"=>2
            ],
            [
                "titre"=>"Call Us",
                "sousTitre"=>"+1 5589 55488 55",
                "infos"=>"+1 6678 254445 41",
                "icon_id"=>3

            ],
        ]);
    }
}
