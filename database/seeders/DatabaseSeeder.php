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
        \App\Models\Soundboard::factory(10)
            ->forArtist()
            ->hasUsers(1)
            ->forUser()
            ->create();
    }
}
