<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $date, $user, $amount, $deposits, $withdrawals, $name, $role, $fees, $interests;

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
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		$msg = array();
		
	     $result = $db->getAllData("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE ".$_COOKIE["ccode"]."");
		 
		 if($result!==0){
    		foreach($result as $row)
            {
                $this->deposits = $row['AMOUNT'];
            }
		}
        
    
	    $result = $db->getAllData("SELECT SUM(AMOUNT) as AMOUNT from charge_tb where date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE ".$_COOKIE["ccode"]."");
		if($result!==0){
	
		foreach($result as $row)
        {
            $this->fees = $row['AMOUNT'];
        }
	}
        
        
        $result = $db->getAllData("SELECT SUM(AMOUNT) as AMOUNT from interest_tb where date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE ".$_COOKIE["ccode"]."");
		
		if($result!==0){
		foreach($result as $row)
        {
            $this->interests = $row['AMOUNT'];
        }
	}
        
        
        $result = $db->getAllData("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE ".$_COOKIE["ccode"]."");
	    if($result!==0){
		foreach($result as $row)
        {
            $this->withdrawals = $row['AMOUNT'];
        }
        
          $balance = number_format(($this->interests + $this->deposits) -  ($this->withdrawals + $this->fees));
        
        //	$msg[] = array("deposits" => number_format($this->deposits), "withdrawals" => number_format($this->withdrawals), "fees" => number_format($this->fees), "interests" => number_format($this->interests), "balance" => $balance);
              $balance1 = ($this->interests + $this->deposits) -  ($this->withdrawals + $this->fees);
        
        	$msg[] = array("deposits" => number_format($this->deposits), "withdrawals" => number_format($this->withdrawals), "fees" => number_format($this->fee), "interests" => number_format($this->interests), "balance" => $balance, "fees1"=>$this->fees, "deposits1"=>$this->deposits, "interests1"=>$this->interests, "withdrawals1"=>$this->withdrawals, "balance1"=>$balance1);
		echo json_encode($msg);
	}
	}
}
?>