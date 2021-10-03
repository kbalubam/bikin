<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ["image" =>"team-1.jpg",
             "nom" => "Walter White",
             "poste" => "Chief Executive Officer"
            ],
            ["image" =>"team-2.jpg",
             "nom" => "Sarah Jhonson",
             "poste" => "Chief Executive Officer"
            ],
            ["image" =>"team-3.jpg",
             "nom" => "William Anderson",
             "poste" => "CTO"
            ],
            ["image" =>"team-4.jpg",
             "nom" => "Amanda Jepson",
             "poste" => "Accountant"
            ],
        ]);
    }
}
