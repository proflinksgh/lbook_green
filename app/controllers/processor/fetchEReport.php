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
	    $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT"));
	    $ecash_comm=$db->get_data_here_value("SELECT SUM(FEE) AS AMT FROM ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","AMT");
	    $totpaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND PAYMENT_STATUS=1","AMT");
	    $totppaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND PAYMENT_STATUS=2","AMT");
	    $totupaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND PAYMENT_STATUS=3","AMT");
	    }else{
	     $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from ecash_tb", "AMOUNT"));
	     $ecash_comm=$db->get_data_here_value("SELECT SUM(FEE) AS AMT FROM ecash_tb","AMT");
	     $totpaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE PAYMENT_STATUS=1","AMT");
	     $totppaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE PAYMENT_STATUS=2","AMT");
	     $totupaid=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM ecash_tb WHERE PAYMENT_STATUS=3","AMT");
	    }
	              
	    $msg[] = array("totecash"=>$totecash, "ecash_comm"=>$ecash_comm, "totpaid"=>isset($totpaid)?$totpaid:0, "totppaid"=>isset($totppaid)?$totppaid:0, "totupaid"=>isset($totupaid)?$totupaid:0);
		    echo json_encode($msg);
	}
}
?>