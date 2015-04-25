// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
	$users =[
	   ['name'     => 'Chris Sevilleja',
        'username' => 'sevilayha',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome')],
	   ['name' => 'Melissa Thrace',
	    'username' => 'mellace',
	    'email' => 'mellisa@gmail.com',
	    'password' => Hash::make('awesome')]
	];
	foreach($users as $user){
	   User::create($user);
	}
  
}

}