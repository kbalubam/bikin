<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            TitreSeeder::class,
            AboutSeeder::class,
            LinksocialSeeder::class,
            IconSeeder::class,
            ContactSeeder::class,
            FeatureSeeder::class,
            AdressfooterSeeder::class,
            UsefullinkfooterSeeder::class,
            ServiceslinkfooterSeeder::class,
            NewsletterinfoSeeder::class,
            SoustitreFootrSeeder::class,
            infofooterSeeder::class,
        ]);
    }
}
