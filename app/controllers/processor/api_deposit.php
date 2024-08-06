<?php

//ini_set('memory_limit', '-1');

class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $date, $deposits, $subscription, $withdrawals, $dob, $gender, $interest, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

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

		$msg = [];


			 $data = $this->user->getAllData("SELECT * FROM deposit_tb WHERE DATE_CREATED > (SELECT (DATE_CREATED - INTERVAL 2 DAY) FROM sync_history WHERE HOST_ID = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1) AND CCODE = ".$_COOKIE["ccode"]."");
			 if($data !== 0){
			 foreach($data as $row){
			 	$msg[] = array("CCODE"=>$row["CCODE"], "HCODE"=>$row["HCODE"], "AMOUNT"=>$row["AMOUNT"], "TAG"=>$row["TAG"],  "CLIENT_ID"=>$row["CLIENT_ID"], "ACCOUNT_NUMBER"=>$row["ACCOUNT_NUMBER"], "DATE_NORMAL"=>$row["DATE_NORMAL"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"], "CREATED_BY"=>$row["CREATED_BY"]);
			 	}
			 	echo json_encode($this->user->lsync_post($msg,"https://linksengineering.net/sync_lbook/public/api/deposit_sync"));
			 }else{
			 	echo json_encode("No data in API deposit");
			 }

	}
}
?>
