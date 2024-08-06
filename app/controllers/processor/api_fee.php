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

			 $data = $this->user->getAllData("SELECT * FROM fee_tb WHERE CCODE = ".$_COOKIE["ccode"]."");
			  if($data !== 0){
			 foreach($data as $row){
				$msg[] = array("CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "ENTRY_FEE"=>$row["ENTRY_FEE"], "WITHDRAWAL_FEE"=>$row["WITHDRAWAL_FEE"], "PRODUCT_ID"=>$row["PRODUCT_ID"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"]);
			 	}
			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/fee_sync"));
			  }else{
			 	echo json_encode(0);
			  }
	
	}
}
?>
