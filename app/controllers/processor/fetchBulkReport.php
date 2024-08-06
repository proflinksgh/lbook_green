<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $date, $user, $amount, $deposit, $withdrawal, $name, $role, $fees;

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
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		if(isset($_POST["date"])){
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		 $totagent = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CUSTCAT=1", "AMOUNT"));
		 $totevd = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CUSTCAT=2", "AMOUNT"));	
		 $totother = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CUSTCAT=3", "AMOUNT"));
	     $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT"));	
	     $fee = number_format($this->user->get_data_here_value("SELECT SUM(FEE) as AMOUNT from btransfer_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT"));
	 	}else{
	 	 $totagent = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE CUSTCAT=1", "AMOUNT"));
		 $totevd = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE CUSTCAT=2", "AMOUNT"));	
		 $totother = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb WHERE CUSTCAT=3", "AMOUNT"));

         $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from btransfer_tb", "AMOUNT"));
	     $fee = number_format($this->user->get_data_here_value("SELECT SUM(FEE) as AMOUNT from btransfer_tb", "AMOUNT"));
	 	}
	    	     
	    $msg[] = array("totecash"=>isset($totecash)?$totecash:0, "fee"=>isset($fee)?$fee:0, "totagent"=>isset($totagent)?$totagent:0, "totevd"=>isset($totevd)?$totevd:0, "totother"=>isset($totother)?$totother:0);
		echo json_encode($msg);
	}
}
?>