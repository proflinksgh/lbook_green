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
	    $this->fetch_contribution();
	}
       function fetch_contribution()
		{
		extract($_POST);
		$db = $this->user_initing;
		$accno = $db->cleanInput($accno);
		$msg = array();

		$fetch_=$db->getAllData("SELECT ACC_STATUS, SMS_STATUS FROM account_tb WHERE ACCOUNT_NO = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
		if($fetch_ != 0){
		foreach($fetch_ as $row)
        {
			$msg[] = array("acc_status" => $row['ACC_STATUS'], "sms_status" => $row['SMS_STATUS']);
        }   
            echo json_encode($msg);
		}
	}
}
?>