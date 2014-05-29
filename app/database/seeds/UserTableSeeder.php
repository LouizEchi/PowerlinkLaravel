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
			'employee_id'     => '0000001',
		));

		User::create(array(
			'username' => 'Bruce',
			'password' => Hash::make('IAMBATMAN'),
			'email'    => 'waynetech@gmail.com',
			'employee_id'     => '0000002',
		));
	}

}
?>