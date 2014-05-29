<?php
class employeesTableSeeder extends Seeder
{

	public function run()
	{
		
		DB::table('employees')->delete();
		employee::create(array(
			'employee_id' => '0000001',
			'employee_ln' => 'Echiverri',
			'employee_name' => 'Louiz',
			'employee_mi' => 'C',
			'employee_birthdate' => '1994-05-14',
			'employee_contact' => '0922-8544-066',
			'employee_WorkSched' => 'MWF',
			'employee_type'     => 'Admin',
			'employee_otsrsrc'     => 'YES',
			'employee_Image'     => 'Louiz.jpg',
		));
		employee::create(array(
			'employee_id' => '0000002',
			'employee_ln' => 'Wayne',
			'employee_name' => 'Bruce',
			'employee_mi' => 'B',
			'employee_birthdate' => '1975-01-30',
			'employee_contact' => '0922-8544-066',
			'employee_WorkSched' => 'MWF',
			'employee_type'     => 'Agent',
			'employee_otsrsrc'     => 'YES',
			'employee_Image'     => 'Batman.jpg',
		));
	}

}
?>