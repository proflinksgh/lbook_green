<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $name, $code, $initial_min_amount, $initial_max_amount, $bal_min, $bal_max, $int_rate, $int_period, $conn, $date_created;

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
		$result = $db->getAllData("SELECT pt.ID, NAME, CODE, INITIAL_MIN_AMOUNT, INITIAL_MAX_AMOUNT, BALANCE_MIN, BALANCE_MAX, INTEREST_RATE, INTEREST_PERIOD, ENTRY_FEE, WITHDRAWAL_FEE from product_tb pt JOIN fee_tb ft ON pt.CODE = ft.PRODUCT_ID AND pt.CCODE=".$_COOKIE["ccode"]."");
		if ($result!==0){
		foreach($result as $row)
        {
            $this->id = $row['ID'];
            $this->name = $row['NAME'];
            $this->code = $row['CODE'];
        	$this->initial_min_amount = $row["INITIAL_MIN_AMOUNT"];
        	$this->initial_max_amount = $row["INITIAL_MAX_AMOUNT"];
        	$this->bal_min = $row['BALANCE_MIN'];
        	$this->bal_max = $row['BALANCE_MAX'];
        	$this->int_rate = $row['INTEREST_RATE'];
			$this->int_period = $row['INTEREST_PERIOD'];
			$this->entry_fee = $row['ENTRY_FEE'];
			$this->withdrawal_fee = $row['WITHDRAWAL_FEE'];
			
			$msg[] = array("id" => $this->id, "name" => $this->name, "code" => $this->code, "initial_min_amount" => $this->initial_min_amount, "initial_max_amount" => $this->initial_max_amount, "bal_min" => $this->bal_min, "bal_max" => $this->bal_max, "int_rate" => $this->int_rate, "int_period" => $this->int_period, "entry_fee" => $this->entry_fee, "withdrawal_fee" => $this->withdrawal_fee);
        }
		echo json_encode($msg);
	}
	}
}
?>