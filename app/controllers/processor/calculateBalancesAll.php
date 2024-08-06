<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $current_balance, $date, $deposits=0, $withdrawal=0, $fee=0, $search, $interest=0;

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
	    $this->fetch_product();
	}
       function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		
		$count=0;
		$ccode = $_COOKIE["ccode"];
		$result = $this->user->getAllData("SELECT ACCOUNT_NO from account_tb WHERE CCODE = $ccode");
		foreach($result as $row)
        {
          $search = $row['ACCOUNT_NO'];
            
 
          $deposits = $this->user->get_data_here_value("SELECT SUM(AMOUNT) AS deposit FROM deposit_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","deposit");
        
        
         $fee = $this->user->get_data_here_value("SELECT SUM(AMOUNT) AS charge FROM charge_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","charge");
        
        
        $interest = $this->user->get_data_here_value("SELECT SUM(AMOUNT) AS interest FROM interest_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","interest");

        $interest = round($interest,2);
        
    
        $withdrawal = $this->user->get_data_here_value("SELECT SUM(AMOUNT) AS withdrawal FROM withdrawal_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","withdrawal");
    
        $balance = ($interest + $deposits) -  ($withdrawal + $fee);

         $update = $this->user->updateFunction("UPDATE balance_tb SET FEES = '$fee', DEPOSITS = '$deposits', INTERESTS = '$interest', WITHDRAWALS = '$withdrawal', BALANCE = '$balance' where ACCOUNT_NUMBER = '$search' AND CCODE = $ccode");
    	    	
    	$deposits = 0;
    	$interest = 0;
    	$withdrawal = 0;
    	$fee = 0;
    	$balance = 0;
        }
        
  }

}
?>