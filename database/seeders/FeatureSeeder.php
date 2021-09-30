<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            
            [
                "img1"=>"features-1.png",
                "img2"=>"features-2.png",
                "titre1"=>"Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
                "sousTitre1"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "li1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "li2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
                "li3"=>"Ullam est qui quos consequatur eos accusamus.",
                "titre2"=>"Corporis temporibus maiores provident",
                "sousTitre2"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "description"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum",
            ],
            [
                "img1"=>"features-3.png",
                "img2"=>"features-4.png",
                "titre1"=>"Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",
                "sousTitre"=>"Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
                "li1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "li2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
                "li3"=>"Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.",
                "titre2"=>"Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",
                "sousTitre2"=>" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "description"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum",
            ],
        ]);
    }
}
