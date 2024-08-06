<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $fname, $othername;

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
	    $this->fetch_deduction();
	}
       function fetch_deduction()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		if(isset($_POST["date"])){
		 $date=$_POST["date"];
		 $user=$_POST["user"];
		 $date2=$_POST["date2"];
		 if(isset($user)){
		  if($user==="all"){
		  	$details=$db->getAllData("SELECT * FROM cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'");
		  }else{
		  	 $details=$db->getAllData("SELECT * FROM cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND POSTED_BY=$user");
		  }
		   
		 }else{
		 	 $details=$db->getAllData("SELECT * FROM cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'");
		 }
        
		}else{
		 if($_SESSION["status"]==="1"){
          $details=$db->getAllData("SELECT * FROM cashpay_tb ORDER BY ID DESC LIMIT 1000");
		 }else{
          $details=$db->getAllData("SELECT * FROM cashpay_tb WHERE POSTED_BY=".$_SESSION['id']." ORDER BY ID DESC LIMIT 1000");
		 }
		}
		
		if($details != 0){
		foreach($details as $row)
        {
         $postedby=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=".$row["POSTED_BY"]."","NAME");
         $msg[]=array("id"=>$row["ID"], "paidby"=>$row["PAIDIN"], "recby"=>$row["RECEIVED_BY"], "customer"=>$row["CUSTOMER"], "amount"=>$row["AMOUNT"], "deno"=>$row["DENOMINATION"], "category"=>$row["CATEGORY"], "date"=>$row["DATE_CREATED"], "postedby"=>$postedby);
        }
         echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>