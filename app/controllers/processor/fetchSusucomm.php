<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $username, $status_id, $othername, $role, $surname, $date, $password;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	   $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$today = date('Y-m-d');
		$user=$_SESSION["id"];
		$month = $db->get_full_month(date('M'));
		
		if($_SESSION["status"]==="1"){
		  $totcom=$db->get_data_here_value("SELECT SUM(COMMISSION) as DEPOSITCOMM FROM susucomm_tb where monthname(DATE_CREATED) = '$month'", "DEPOSITCOMM");
	      $overcomm=$db->get_data_here_value("SELECT SUM(COMMISSION) as DEPOSITCOMM FROM susucomm_tb", "DEPOSITCOMM");
	      $commtoday = $db->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSITCOMM FROM susucomm_tb where date(DATE_CREATED) = '$today'", "DEPOSITCOMM");
	      $overral = $db->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSITCOMM FROM susucomm_tb", "DEPOSITCOMM");
		  $result = $db->getAllData("SELECT * FROM susucomm_tb ORDER BY ID DESC");  
		}else{
		  $totcom=$db->get_data_here_value("SELECT SUM(COMMISSION) as DEPOSITCOMM FROM susucomm_tb where POSTED_BY = '$user' AND monthname(DATE_CREATED) = '$month'", "DEPOSITCOMM");
	      $overcomm=$db->get_data_here_value("SELECT SUM(COMMISSION) as DEPOSITCOMM FROM susucomm_tb WHERE POSTED_BY = '$user'", "DEPOSITCOMM");
	      $commtoday = $db->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSITCOMM FROM susucomm_tb where POSTED_BY = $user AND date(DATE_CREATED) = '$today'", "DEPOSITCOMM");
	      $overral = $db->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSITCOMM FROM susucomm_tb where POSTED_BY = $user", "DEPOSITCOMM");
		  $result = $db->getAllData("SELECT * FROM susucomm_tb WHERE POSTED_BY = '$user' ORDER BY ID DESC");  
		}
		
		if($result!==0){
		foreach($result as $row)
        {
          $postedby=$db->get_data_here_value("SELECT USERNAME FROM admin_tb WHERE CODE=".$row["POSTED_BY"]."","USERNAME");
		  $msg[] = array("overcomm"=>isset($overcomm)?$overcomm:0, "commtoday"=>isset($commtoday)?$commtoday:0, "overall"=>isset($overral)?$overral:0, "totcom"=>isset($totcom)?$totcom:0, "comm"=>isset($row["COMMISSION"])?$row["COMMISSION"]:0, "amount"=>number_format($row["AMOUNT"],2), "id" => $row["ID"], "date"=>$row["DATE_CREATED"], "postedby" => $postedby);
        }
        echo json_encode($msg); 
	  }else{
	    echo json_encode("none");
	  }
	}
}
?>