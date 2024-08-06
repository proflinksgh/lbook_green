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
		$details=$db->getAllData("SELECT * FROM mcustomer_tb");
		if($details != 0){
		foreach($details as $row)
        {
         $custid=$row["CATEGORY"];
         $row["CATEGORY"]=($row["CATEGORY"]=="1"?"Agent":$row["CATEGORY"]=="2")?"Mass Transfer":"EVD";
         $row["AGENTID"]=isset($row["AGENTID"])?$row["AGENTID"]:"N/A";
         $row["AGENT_NAME"]=isset($row["AGENT_NAME"])?$row["AGENT_NAME"]:"N/A";
         $row["AGENTCUST"]=isset($row["AGENTCUST"])&&$row["AGENTCUST"]!==''?$row["AGENTCUST"]:"N/A";
         $msg[]=array("id"=>$row["ID"], "fullname"=>$row["FULLNAME"], "agentname"=>$row["AGENT_NAME"], "agentno"=>$row["AGENTID"], "phone"=>$row["PHONE"], "custid"=>$custid, "city"=>$row["CITY"], "category"=>$row["CATEGORY"], "agentcust"=>$row["AGENTCUST"]);
        }
         echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>