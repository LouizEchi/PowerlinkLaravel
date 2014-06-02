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

		public function getEmployeeAge($date) 
		{

    		$date = strtotime($date);
  	  		$y = date('Y', $date);  
    		if (($m = (date('m') - date('m', $date))) < 0) 
    		{
        	  $y++;
    		} 
    		elseif ($m == 0 && date('d') - date('d', $date) < 0) 
    		{
      		  $y++;
    		}
    
    return date('Y') - $y;
    
		}

		public function getEmployeeMI()
		{
			return $this->employee_mi;

		}
		public function getEmployeeType($id)
		{	
			$employeetype = DB::table('employees')->where('employee_id', $id)->pluck('employee_type');
			return $employeetype;
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