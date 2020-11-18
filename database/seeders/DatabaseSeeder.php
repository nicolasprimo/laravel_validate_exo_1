<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GoldenBook as GB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        GB::factory(10)->create();
    }
}
    