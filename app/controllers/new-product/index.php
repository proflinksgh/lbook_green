<?php

class amwork_controller extends route
{
	/*
	*The default controller method .
	*@return void
	*
	*/

	private $view_folder_name = "new-product";

	public function index($name = '')
	{
	    if(!isset($_SESSION['id'])){
	        header('location: auth');
	    }
		require ($_SERVER['DOCUMENT_ROOT'].PAGE_ADDR_HOLDER.'/app/libs/class_loader.php');
		$init = new master_class();

		$initing = new extend_function();
		
	    $this->view('index' , ['initiator'=>$initing],$this->view_folder_name);
	}	
}