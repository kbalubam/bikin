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
<<<<<<< HEAD
        $this->call([
            RoleSeeder::class,
            NavbarSeeder::class,
            PortfolioSeeder::class,
            ServicesSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            UserSeeder::class
        ]);

=======

        $this->call([
            TitreSeeder::class,
        ]);
>>>>>>> fdcf633d356bbf4251fca44787f9b115e8e3bc25
    }
}
