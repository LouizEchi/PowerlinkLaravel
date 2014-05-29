<?php


class employee extends Eloquent{
	public $timestamps = false;
	protected $table = 'employees';
		
		public function getEmployeeID()
		{
			return $this->employee_id;
		}

		public function getEmployeeln()
		{
			return $this->employee_ln;
		}

		public function getEmployeeName()
		{
			return $this->employee_name;
		}

		public function getEmployeeMI()
		{
			return $this->employee_mi;

		}public function getEmployeeType($id)
		{
			$employee = where('employee_id' , '=', $id)->first();
			return $this->employee_type;
		}

		public function getEmployeeWorkSchedule()
		{
			return $this->employee_WorkSched;
		}

		public function getEmployeeOutsourceStatus()
		{
			return $this->employee_otrsrc;
		}

		public function getEmployeeImageFileName()
		{
			return $this->employee_Image;
		}

	
}
?>