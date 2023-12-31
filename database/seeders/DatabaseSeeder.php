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
        // \App\Models\User::factory(10)->create();
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(MainCategorySeeder::class);
        $this->call(ReviewSeeder::class);
        // $this->call(BrandSeeder::class);
    }
}
