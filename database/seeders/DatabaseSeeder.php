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
        $this->call(ContinentSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(EquipeSeeder::class);
        $this->call(JoueurSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
