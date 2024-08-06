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
		$msg = [];
			 $data = $this->user->getAllData("SELECT * FROM balance_tb WHERE DATE_CREATED > (SELECT (DATE_CREATED - INTERVAL 2 DAY) FROM sync_history WHERE HOST_ID = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1) AND CCODE = ".$_COOKIE["ccode"]."");
			  if($data !== 0){
			 foreach($data as $row){

			 	$msg[] = array("ID"=>$row["ID"],"CLIENT_ID"=>$row["CLIENT_ID"], "CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "PRODUCT_ID"=>$row["PRODUCT_ID"],  "ACCOUNT_NUMBER"=>$row["ACCOUNT_NUMBER"], "FEES"=>$row["FEES"], "DEPOSITS"=>$row["DEPOSITS"], "INTERESTS"=>$row["INTERESTS"], "WITHDRAWALS"=>$row["WITHDRAWALS"], "BALANCE"=>$row["BALANCE"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"]   );
			 	}
			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/balance_sync"));
			  }else{
			 	echo json_encode(0);
		}
	}
}
?>
