<?php

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
    	$user = App\User::create([

    		'name'=>'Murad Hasan',

    		'email'=>'mhkhan.me@gmail.com',
    		'password'=>bcrypt('password'),
            'admin'=>1,
    	]);


        App\Profile::create([

            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/p.jpg',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, soluta dolorum. Aliquam, quasi, quod! Quis voluptates sapiente hic, accusamus nostrum! Reprehenderit fugiat, vel quam dolorem alias commodi ratione eveniet placeat!',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com',
            'github'=>'github.com',
        ]);
        
    }
}
