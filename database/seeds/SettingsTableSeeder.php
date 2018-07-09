<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name'=>"Article's Blog",
        	'contact_number'=>"+88 0191 433 7606",
        	'contact_email'=>"murad.infos@gmail.com",
        	'address'=>"Dhaka-1361,Bangladesh",
        ]);
    }
}
