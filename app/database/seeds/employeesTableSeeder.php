<?php
class employeesTableSeeder extends Seeder
{

	public function run()
	{
		
		DB::table('employees')->delete();
		employee::create(array(
			
			'employee_ln' => 'Wayne',
			'employee_name' => 'Bruce',
			'employee_mi' => 'B',
			'employee_age' => '25',
			'employee_contact' => '0922-8544-066',
			'employee_WorkSched' => 'MWF',
			'employee_otsrsrc'     => 'YES',
			'employee_Image'     => 'Batman.jpg',
		));
	}

}
?>