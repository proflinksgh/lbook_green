<?php

class amwork_controller extends route
{

	private $view_folder_name = "fees";

	public function index($name = '')
	{
	    if(!isset($_SESSION['id'])){
	        header('location: auth');
	   }
	   
	   	if($_SESSION['role']=='5'){
        $Time ="05:59:00";
        $Time2="18:59:00";
        if (time() <= strtotime($Time)) {
         header('location: session-begin');
         }else if(time() >= strtotime($Time2)){
             header('location: close-session'); 
         }
        }else if($_SESSION['role']=='6'){
        $Time ="05:59:00";
        $Time2="19:59:00";
        if (time() <= strtotime($Time)) {
         header('location: session-begin');
         }else if(time() >= strtotime($Time2)){
             header('location: close-session'); 
         }
        }
        
		require ($_SERVER['DOCUMENT_ROOT'].PAGE_ADDR_HOLDER.'/app/libs/class_loader.php');
		$init = new master_class();

		$initing = new extend_function();
		
	    $this->view('index' , ['initiator'=>$initing],$this->view_folder_name);
	}	
}