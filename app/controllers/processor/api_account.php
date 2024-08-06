<?php
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
	    $this->fetch_account_tb();
	}
       function fetch_account_tb()
		{
			 $data = $this->user->getAllData("SELECT * FROM account_tb WHERE DATE_CREATED > (SELECT (DATE_CREATED - INTERVAL 2 DAY) FROM sync_history WHERE HOST_ID = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1) AND CCODE = ".$_COOKIE["ccode"]."");
			 if($data !== 0){
			 foreach($data as $row){
			 	$msg[] = array("CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "PRODUCT_ID"=>$row["PRODUCT_ID"],  "CLIENT_ID"=>$row["CLIENT_ID"], "ACCOUNT_NO"=>$row["ACCOUNT_NO"], "SMS_STATUS"=>$row["SMS_STATUS"],  "ACC_STATUS"=>$row["ACC_STATUS"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"]);
			 	}
			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/account_sync"));
			  }else{
			 echo json_encode(0);
		 }
	}
}
?>
