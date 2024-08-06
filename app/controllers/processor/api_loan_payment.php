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


			 $data = $this->user->getAllData("SELECT * FROM loan_payment_tb");

			  if($data !== 0){

			 foreach($data as $row){

			$msg[] = array("ID"=>$row["ID"], "LOAN_ID"=>$row["LOAN_ID"], "ACCOUNT_NO"=>$row["ACCOUNT_NO"], "AMOUNT"=>$row["AMOUNT"], "DATE_CREATED"=>$row["DATE_CREATED"], "DATE_MODIFIED"=>$row["DATE_MODIFIED"]);

			 	}

			 	echo json_encode($msg);
			  
			  }else{
			 	echo json_encode(0);
			  }

	
	}
}
?>
