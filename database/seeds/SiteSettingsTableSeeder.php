<?php

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SiteSetting::create([

        	'site_title'=>"PREMEDI",
        	'site_contact'=>"+880 0123 456 789",
        	'site_email'=>"zerocaps@gmail.com",
        	'address'=>"Mohammodput, Townhall, dhaka",
        ]);
    }
}
