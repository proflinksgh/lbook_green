<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer, $status;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_contact();
	}
       function fetch_contact()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$lid = $db->cleanInput($lid);
		$mtype = $db->cleanInput($mtype);
		$accno=$db->get_data_here_value("SELECT ACCOUNT_NO FROM loan_tb WHERE ID=$lid","ACCOUNT_NO");
		$contact=$db->get_data_here_value("SELECT phone FROM loanreg_tb WHERE code='$accno'","phone");
		if($mtype!=="payment"){
		// $amount=number_format($db->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ID=$lid","AMOUNT"),2);
		// echo json_encode(array("status"=>"success", "message"=>$db->loan_sms($lid, $amount, $mtype)));
	   }else{
	   	// $amount = number_format($db->cleanInput($amount),2);
	   	// echo json_encode(array("status"=>"success", "message"=>$db->loan_sms($lid, $amount, $mtype)));
	   }
	}
}
?>