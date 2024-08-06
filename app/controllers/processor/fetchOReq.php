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
		$count=0;
		$user = $_SESSION["id"];
		if($_SESSION["status"]==="1"){
		if(isset($_POST["date"])){
		 $date=$_POST["date"];
		 $date2=$_POST["date2"];	
        $details=$db->getAllData("SELECT * FROM excess_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'");
		}else{
		 $details=$db->getAllData("SELECT * FROM excess_tb ORDER BY ID DESC LIMIT 1000");
			}
		}else{
		 if(isset($_POST["date"])){
		 $date=$_POST["date"];
		 $date2=$_POST["date2"];	
           $details=$db->getAllData("SELECT * FROM excess_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND posted_by=$user");
        }else{
        	 $details=$db->getAllData("SELECT * FROM excess_tb WHERE posted_by=$user");
           }
		}

		if($details != 0){
		foreach($details as $row)
        {
         $postedby=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=".$row["posted_by"]."","NAME");
         $checkedby=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=".$row["checked_by"]."","NAME");
         $type=$row["ttype"]==="1"?"Overs":"Shortage";
         if($row["ttype"]==="1"){
         if($row["type"]==="1"){
          $over="MOMO Overs";
         }else if($row["type"]==="2"){
          $over="SUSU Overs";
         }else if($row["type"]==="3"){
          $over="E-Cash Overs";
         }else if($row["type"]==="4"){
          $over="Sales Overs";
         }else if($row["type"]==="5"){
          $over="EVD Transfer Overs";
         }else if($row["type"]==="6"){
          $over="SUSU Withdrawal Overs";
         	}
     	 }else{
     	 if($row["type"]==="1"){
          $over="MOMO Shortage";
         }else if($row["type"]==="2"){
          $over="SUSU Shortage";
         }else if($row["type"]==="3"){
          $over="E-Cash Shortage";
         }else if($row["type"]==="4"){
          $over="Sales Shortage";
         }else if($row["type"]==="5"){
          $over="EVD Transfer Shortage";
         }else if($row["type"]==="6"){
          $over="SUSU Withdrawal Shortage";
         	}
     	 }
         if($row["status"]==="1"){
         $status="Pending Approval";
         $count++;
         $checkedby="Pending";
         if($_SESSION["status"]==="1"){
         	$status="<div><button cid=".$row['id']." class='btn btn-primary btnApproveLedger'>Approve</button><button style='margin-left:5px' cid=".$row['id']." class='btn btn-danger btnDeclineLedger'>Decline</button></div>";
         }else{
         	$status="Pending Approval";
         }
         }else if($row["status"]==="2"){
         $status="Declined";
         }else if($row["status"]==="0"){
         $status="Approved";
         }
         $msg[]=array("id"=>$row["id"], "type"=>$type, "category"=>$over, "date"=>$row["date_created"], "amount"=>number_format($row["amount"],2), "oamount"=>number_format($row["oamount"],2), "count"=>$count, "status"=>$status, "remarks"=>$row["remarks"], "postedby"=>$postedby, "checkedby"=>$checkedby);
        }
         echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>