<?php

//ini_set('memory_limit', '-1');

class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;

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
	    $this->fetch_activation_tb();
	}
       function fetch_activation_tb()
		{
			 $data = $this->user->getAllData("SELECT * FROM activation_tb WHERE CCODE = ".$_COOKIE["ccode"]."");
			  if($data !== 0){
			 foreach($data as $row){
			 	$msg[] = array("CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "NEXT_DATE"=>$row["NEXT_DATE"], "USED_CODE"=>$row["USED_CODE"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"]);
			 	}
			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/activation_sync"));
			  }else{
			 	echo json_encode(0);
			  }
		}
	}
?>
