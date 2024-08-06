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
		 $date2=$_POST["date2"];	
         $details=$db->getAllData("SELECT * FROM ereq_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'");
		}else{
		 $details=$db->getAllData("SELECT * FROM ereq_tb ORDER BY ID DESC LIMIT 1000");
		}
		
		if($details != 0){
		foreach($details as $row)
        {
         $purchaser=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE ID=".$row["PURCHASER"]."","NAME");
         $msg[]=array("id"=>$row["ID"], "purchaser"=>$purchaser, "amount"=>$row["AMOUNT"], "token"=>$row["TOKEN"], "transport"=>$row["TRANSPORT"], "date"=>$row["DATE_CREATED"], "bank"=>$row["BANK"]);
        }
         echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>