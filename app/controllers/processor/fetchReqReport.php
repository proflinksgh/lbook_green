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
		  $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from ereq_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT"));
	    $token=$db->get_data_here_value("SELECT SUM(TOKEN) AS AMT FROM ereq_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","AMT");
	    $transport=$db->get_data_here_value("SELECT SUM(TRANSPORT) AS AMT FROM ereq_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","AMT");
		}else{
		 $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from ereq_tb", "AMOUNT"));
	    $token=$db->get_data_here_value("SELECT SUM(TOKEN) AS AMT FROM ereq_tb","AMT");
	    $transport=$db->get_data_here_value("SELECT SUM(TRANSPORT) AS AMT FROM ereq_tb","AMT");
		}

	    $msg[] = array("totecash"=>$totecash, "token"=>$token, "transport"=>$transport);
		    echo json_encode($msg);
	}
}
?>