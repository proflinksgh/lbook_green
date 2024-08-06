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
		$count=0;
		$user=$_SESSION["id"];
		if($_SESSION['status'] == '1'){
		  $result = $db->getAllData("SELECT * FROM client_tb WHERE ACCOUNT_STATUS=4 ORDER BY ID DESC");  
		}else{
		   $result = $db->getAllData("SELECT * FROM client_tb WHERE ACCOUNT_STATUS=4 AND POST_BY=".$user." ORDER BY ID DESC");  
		}
		if($result!==0){
		foreach($result as $row)
        {
          $count++;
          $postedby=$db->get_data_here_value("SELECT USERNAME FROM admin_tb WHERE CODE=".$row["POST_BY"]."","USERNAME");
		  $msg[] = array("id"=>$row["ID"], "count"=>$count,  "client"=>$row["FIRSTNAME"]." ".$row["LASTNAME"]." ".$row["OTHERNAME"], "date"=>$row["DATE_CREATED"], "postedby" => $postedby);
        }
        echo json_encode($msg); 
	  }else{
	    echo json_encode("none");
	  }
	}
}
?>