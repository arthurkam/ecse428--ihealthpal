// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		//DB::table('users')->delete();
		User::create(array(
			'firstname'     => 'User',
			'lastname'		=> 'Test',
			'email'    		=> 'testuser@testuser.com',
			'password' 		=> Hash::make('testuser'),
		));
	}

}
