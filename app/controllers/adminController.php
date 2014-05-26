<?php

class adminController extends \BaseController {

    public function index()
	{
		// get all the nerds
		$control = users::all();

		// load the view and pass the nerds
		return View::make('Control.index')
			->with('users', $control);
	}

	public function addUser()
		{
		  return View::make('addObjects.addUser');							

		}

		public function deleteUser($id)
		{
		  return View::make('deleteObjects.deleteUser');							
		}

		public function updateUser($id)
		{
		  return View::make('updateObjects.updateUser');							
		}

       

		public function addEmployee()
		{
		  return View::make('addObjects.addEmployee');							

		}

		public function deleteEmployee($id)
		{
		  return View::make('deleteObjects.deleteEmployee');							
		}

		public function updateEmployee($id)
		{
		  return View::make('updateObjects.updateEmployee');							
		}



		public function addEquipment()
		{
		  return View::make('addObjects.addEquipment');							

		}

		public function deleteEquipment($id)
		{
		  return View::make('deleteObjects.deleteEquipment');							
		}

		public function updateEquipment($id)
		{
		  return View::make('updateObjects.updateEquipment');							
		}



		public function addEvent()
		{
		  return View::make('addObjects.addEvent');							

		}

		public function deleteEvent($id)
		{
		  return View::make('deleteObjects.deleteEvent');							
		}

		public function updateEvent($id)
		{
		  return View::make('updateObjects.updateEvent');							
		}



		public function addPackage()
		{
		  return View::make('addObjects.addPackage');							

		}

		public function deletePackage($id)
		{
		  return View::make('deleteObjects.deletePackage');							
		}

		public function updatePackage($id)
		{
		  return View::make('updateObjects.updatePackage');							
		}

		

		public function addOrder()
		{
		  return View::make('addObjects.addOrder');							

		}

		public function deleteOrder($id)
		{
		  return View::make('deleteObjects.deleteOrder');							
		}

		public function updateOrder($id)
		{
		  return View::make('updateObjects.updateOrder');							
		}



}
