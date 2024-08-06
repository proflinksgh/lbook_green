<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $fees, $deposits, $interests, $withdrawals, $balance;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_product();
	}
       function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$result = $db->getAllData("SELECT SUM(FEES) as FEES, SUM(DEPOSITS) as DEPOSITS, SUM(INTERESTS) as INTERESTS, SUM(WITHDRAWALS) as WITHDRAWALS, SUM(BALANCE) as BALANCE from balance_tb WHERE CCODE = ".$_COOKIE["ccode"]."");
		if($result!==0){
		foreach($result as $row)
        {
           
        	$this->fees = number_format($row['FEES']);
        	$this->deposits = number_format($row['DEPOSITS']);
        	$this->interests = number_format($row['INTERESTS']);
        	$this->withdrawals = number_format($row['WITHDRAWALS']);
        	$this->balance = number_format($row['BALANCE']);

			//$msg[] = array("fees" => $this->fees, "deposits" => $this->deposits, "interests" => $this->interests, "withdrawals" => $this->withdrawals, "balance" => $this->balance);
        
            $msg[] = array("fees" => $this->fees, "deposits" => $this->deposits, "interests" => $this->interests, "withdrawals" => $this->withdrawals, "balance" => $this->balance, "fees1"=>$row['FEES'], "deposits1"=>$row['DEPOSITS'], "interests1"=>$row['INTERESTS'], "withdrawals1"=>$row['WITHDRAWALS'], "balance1"=>$row['BALANCE']);
            
        }
		echo json_encode($msg);
	}
 }
}
?>