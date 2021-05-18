<?php

namespace Database\Seeders;

use App\Models\Modulecategory;
use Illuminate\Database\Seeder;

class ModuleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modulecategory::factory(3)->hasModules(2)->create();
    }
}
