<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::factory(9)->create();
    }
}
