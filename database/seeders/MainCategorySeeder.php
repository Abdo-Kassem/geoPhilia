<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maincat = \App\Models\MainCategory::create([
            'name' => 'Test main cat',
        ]);
        $maincat = \App\Models\MainCategory::create([
            'name' => 'Test main cat',
        ]);
        $maincat = \App\Models\MainCategory::create([
            'name' => 'Test main cat',
        ]);
        $maincat = \App\Models\MainCategory::create([
            'name' => 'Test main cat',
        ]);
        $maincat = \App\Models\MainCategory::create([
            'name' => 'Test main cat',
        ]);
    }
}
