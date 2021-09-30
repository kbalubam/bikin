<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "soustitre" => "Lorem Ipsum",
                "description" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
            ],
            [
                "soustitre" => "Sed ut perspiciatis",
                "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore",
            ],
            [
                "soustitre" => "Magni Dolores",
                "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia",
            ],
            [
                "soustitre" => "Nemo Enim",
                "description" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
            ],




        ]);
    }
}
