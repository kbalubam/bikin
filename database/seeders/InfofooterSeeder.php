<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfofooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infosfooters')->insert([
            [
                "intitule"=>"Phone",
                "donnee"=>"+1 5589 55488 55",
            ],
            [
                "intitule"=>"Email",
                "donnee"=>"info@example.com",
            ],
        ]);
    }
}
