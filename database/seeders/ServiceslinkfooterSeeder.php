<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceslinkfooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('serviceslinkfooters')->insert([
            [
                'name'=>"Web Design",
                'link'=>"#",
            ],
            [
                'name'=>"Web Development",
                'link'=>"#",
            ],
            [
                'name'=>"Product Management",
                'link'=>"#",
            ],
            [
                'name'=>"Marketing",
                'link'=>"#",
            ],
            [
                'name'=>"Graphic Design",
                'link'=>"#",
            ],
        ]);
    }
}
