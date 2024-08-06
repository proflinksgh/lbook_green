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
         $details=$db->getAllData("SELECT * FROM ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'");
		}else{
		 $details=$db->getAllData("SELECT * FROM ecash_tb ORDER BY ID DESC LIMIT 1000");
		}
		
		if($details != 0){
		foreach($details as $row)
        {
         $custid=$row["CATEGORY"];
         if($custid==="1"){
          $custname=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE ID=".$row["AGCUSTID"]."","NAME");	
         }else{
         	$custname=$db->get_data_here_value("SELECT FULLNAME FROM mcustomer_tb WHERE ID=".$row["AGCUSTID"]."","FULLNAME");
         }
         if($row["PAYMENT_STATUS"]==="1"){
         	$pstatus="Fully Paid";
         }else if($row["PAYMENT_STATUS"]==="2"){
         	$pstatus="<div>
         	 <select class='form-control' id='idEStatus' cid=".$row["ID"].">
         	 <option value='2' selected>Partially Paid</option>
         	 <option value='1'>Fully Paid</option>
         	 <option value='3'>Unpaid</option>
         	 <option></option>
         	 </select>
         	 </div>";
         }else{
         	$pstatus="<div>
         	 <select class='form-control' id='idEStatus' cid=".$row["ID"].">
         	 <option value='2'>Partially Paid</option>
         	 <option value='1'>Fully Paid</option>
         	 <option value='3' selected>Unpaid</option>
         	 <option></option>
         	 </select>
         	 </div>";
         }

         $postedby=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=".$row["POSTED_BY"]."","NAME");
         $row["CATEGORY"]=$row["CATEGORY"]==="1"?"Agent":"Customer";
         $msg[]=array("id"=>$row["ID"], "postedby"=>$postedby, "fullname"=>$custname, "category"=>$row["CATEGORY"], "amount"=>$row["AMOUNT"], "comm"=>$row["FEE"], "pstatus"=>$pstatus, "date"=>$row["DATE_CREATED"]);
        }
         echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>