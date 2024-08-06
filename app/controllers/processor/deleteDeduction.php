<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $ids = array();
	
	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	
	public function index()
	{
        $this->delete();
	}
    function delete()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$ids = $db->cleanInput($ids);
		$query = $db->deleRecord("DELETE FROM employee_deduction_tb where ID IN ($ids) AND CCODE = ".$_COOKIE["ccode"]."");
		if($query == "0"){
	        echo 'success';
		}else{
			echo 'failed';
        		}
	    }
    }
?>