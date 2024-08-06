<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount;

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
        $this->calc();
	}

	function calc()
	   {
		extract($_POST);
		$db = $this->user_initing;
	    $id = $db->cleanInput($id);
		$date = $db->cleanInput($date);
		$deposit = $db->cleanInput($deposit);
		$cashout = $db->cleanInput($cashout);
		
		$depcomm = 0.2 * $deposit;
		$cashcomm = 0.1 * $cashout;
		
        $update_momo = $this->user->updateFunction("UPDATE momo_trans_tb SET DATE_CREATED = '$date', DEPOSIT = '$deposit', DEPOSIT_COMM = '$depcomm', CASHOUT = '$cashout', CASHOUT_COMM = '$cashcomm' where ID = '$id'");
    	
    	echo $update_momo;
        	           }
    		        }
    ?>