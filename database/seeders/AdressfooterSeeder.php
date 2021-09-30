<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressfooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adressfooters')->insert([
            [

                "street"=>"A108 Adam Street",
                "city"=>" New York, NY 535022",
                "country"=>"United States"

            ]
            ]);
    }
}
