<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $footer = \App\Models\Footer::create([
            'name' => 'facebook',
            'action' => 'https://www.facebook.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'twitter',
            'action' => 'https://www.twitter.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'instagram',
            'action' => 'https://www.instagram.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'google',
            'action' => 'https://www.tumblr.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'linkedin',
            'action' => 'https://www.linkedin.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'youtube',
            'action' => 'https://www.youtube.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'soundcloud',
            'action' => 'https://www.soundcloud.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'pinterest',
            'action' => 'https://www.pinterest.com/',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'phone',
            'action' => '01016383239  \  01555047497',
        ]);
        $footer = \App\Models\Footer::create([
            'name' => 'email',
            'action' => 'info@geophilia.net',
        ]);
    }
}
