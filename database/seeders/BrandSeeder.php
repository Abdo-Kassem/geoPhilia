<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = \App\Models\Brand::create([
            'brand' => 'test',
            'photo' => 'img',
            'link' => 'https://www.facebook.com/',
        ]);
    }
}
