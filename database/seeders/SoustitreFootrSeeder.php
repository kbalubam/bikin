<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoustitreFootrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soustitrefooters')->insert([
            [
                "intitule"=>"Useful Links"
            ],
            [
                "intitule"=>"Our Services"
            ],
            [
                "intitule"=>"Join Our Newsletter"
            ],
        ]);
    }
}
