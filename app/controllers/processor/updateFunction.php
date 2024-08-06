<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
		$this->user = new extend_function();
	}
		public function index()
	{
        $this->post_register();
	}

	function post_register()
	   {
		extract($_POST);
		$db = $this->user_initing;
			$table = $_POST['table'];
    		$setclause = $_POST['setclause'];
    		$currDate = date('Y-m-d');
    		$currDate = $currDate." ".date("h:i:sa");
    		
    		if(isset($_POST['whereclause'])){
    		  $whereclause = $_POST['whereclause'];
    		  if($table==="calc_comm"||$table=="excess_tb"){
    		  	$query = "UPDATE ".$table." SET ".$setclause." WHERE ".$whereclause.""; 
    		  }else{
    		  	$query = "UPDATE ".$table." SET ".$setclause.", DATE_MODIFIED = '$currDate' WHERE ".$whereclause." AND CCODE = ".$_COOKIE["ccode"].""; 
    		  }
    		  
    		  $update_record = $this->user->updateFunction($query);
    		echo $update_record=="0"?json_encode(array("status"=>"success")):json_encode(array("status"=>"failed"));
    		}else{
    		  if($table=="company_tb"){
                $query = "UPDATE ".$table." SET ".$setclause.", DATE_MODIFIED = '$currDate' WHERE UNIQ = ".$_COOKIE["ccode"].""; 
    		  }else{
    		    $query = "UPDATE ".$table." SET ".$setclause.", DATE_MODIFIED = '$currDate' WHERE CCODE = ".$_COOKIE["ccode"].""; 
    		  } 
    		  $update_record = $this->user->updateFunction($query);
    		echo $update_record=="0"?json_encode(array("status"=>"success-no-where")):json_encode(array("status"=>"failed"));
    		}
		}
	}
?>