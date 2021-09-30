<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsefullinkfooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usefullinkfooters')->insert([
            [
                'name'=>"Home",
                'link'=>"#",
            ],
            [
                'name'=>"About us",
                'link'=>"#",
            ],
            [
                'name'=>"Services",
                'link'=>"#",
            ],
            [
                'name'=>"Terms of service",
                'link'=>"#",
            ],
            [
                'name'=>"Privacy policy",
                'link'=>"#",
            ],
        ]);
    }
}
