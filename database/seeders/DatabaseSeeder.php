<?php

namespace Database\Seeders;

use App\Models\Role;
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
            RoleSeeder::class,
            NavbarSeeder::class,
            PortfolioSeeder::class,
            ServicesSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            UserSeeder::class,
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
