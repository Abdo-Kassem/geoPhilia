<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' => 'Mohamed Ahmed',
            'email' => 'mohamed@app.com',
            'password' => bcrypt('123123'),
        ]);

        $user->attachRole('super_admin');
    }
}
