<?php

class amwork_controller extends route
{
	private $view_folder_name = "finloan";

	public function index($name = '')
	{
		require ($_SERVER['DOCUMENT_ROOT'].PAGE_ADDR_HOLDER.'/app/libs/class_loader.php');
		$init = new master_class();

		$initing = new extend_function();
		
	    $this->view('index' , ['initiator'=>$initing],$this->view_folder_name);
	}	
}