<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Building::factory(20)->create();
    }
}
