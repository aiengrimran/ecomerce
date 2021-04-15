<?php

namespace Database\Seeders;
use App\Models\Bed;
use App\Models\Chair;
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
        Bed::factory(10)->create();
        // Chair::factory(10)->create();
    }
}
