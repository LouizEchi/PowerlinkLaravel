<?php
class employeesTableSeeder extends Seeder
{

	public function run()
	{
		
		DB::table('employeess')->delete();
		employees::create(array(
			'employees_type' => 'Agent',
			'employees_ln' => 'Wayne',
			'employees_name' => 'Bruce',
			'employees_mi' => 'B',
			'employees_age' => '25',
			'employees_contact' => '0922-8544-066',
			'employees_WorkSched' => 'MWF',
			'employee_otsrsrc'     => 'YES',
			'employee_Image'     => 'Batman.jpg',
		));
	}

}
?>