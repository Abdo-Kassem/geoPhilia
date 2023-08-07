<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Admin::create([
            'name' => 'Mohamed',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
        ]);

        $admin->attachRole('super_admin');
    }
}
