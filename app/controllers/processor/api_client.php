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
	    $this->fetch_client_tb();
	}
      

       function fetch_client_tb()
		{
		$msg = [];
			 $data = $this->user->getAllData("SELECT * FROM client_tb WHERE DATE_CREATED > (SELECT (DATE_CREATED - INTERVAL 2 DAY) FROM sync_history WHERE HOST_ID = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1) AND CCODE = ".$_COOKIE["ccode"]."");
			  if($data !== 0){
			 foreach($data as $row){
			  $msg[] = array("CODE"=>$row["CODE"], "CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "FIRSTNAME"=>$row["FIRSTNAME"], "LASTNAME"=>$row["LASTNAME"], "OTHERNAME"=>$row["OTHERNAME"], "DOB"=>$row["DOB"], "GENDER"=>$row["GENDER"], "CONTACT_1"=>$row["CONTACT_1"], "NEXT_OF_KIN"=>$row["NEXT_OF_KIN"], "NEXT_OF_KIN_CONTACT"=>$row["NEXT_OF_KIN_CONTACT"], "REGION"=>$row["REGION"], "CITY"=>$row["CITY"], "AREA"=>$row["AREA"], "OCCUPATION"=>$row["OCCUPATION"], "IDENTIFICATION"=>$row["IDENTIFICATION"], "IDNUMBER"=>$row["IDNUMBER"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"], "ACCOUNT_STATUS"=>$row["ACCOUNT_STATUS"], "IMAGE_PATH"=>$row["IMAGE_PATH"], "POST_BY"=>$row["POST_BY"]  );;

			 	}

			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/client_sync"));
			  
			  }else{
			 	echo json_encode(0);
			  }


	}
}
?>
