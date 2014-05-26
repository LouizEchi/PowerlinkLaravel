<?php
class UserTableSeeder extends Seeder
{

	public function run()
	{

		DB::table('users')->delete();
		User::create(array(
			'username' => 'Louiz',
			'password' => Hash::make('12345'),
			'email'    => 'louizechiverri@gmail.com',
			'user_type' => 'Admin',
			'employeeid'     => '1',
		));

		User::create(array(
			'username' => 'Bruce',
			'password' => Hash::make('IAMBATMAN'),
			'email'    => 'waynetech@gmail.com',
			'user_type' => 'Agent',
			'employeeid'     => '1',
		));
	}

}
?>