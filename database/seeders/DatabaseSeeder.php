<?php

namespace Database\Seeders;

use Database\Seeders\{ProductSeeder, CategorySeeder, ColorSeeder, MaterialSeeder, UserSeeder};

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
            CategorySeeder::class,
            ColorSeeder::class,
            MaterialSeeder::class,
            ProductSeeder::class,
            UserSeeder::class
        ]);
    }
}
