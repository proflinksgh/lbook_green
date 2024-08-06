<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $date, $initial_min, $initial_max, $balance, $lname, $othername, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

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
		$product = $db->cleanInput($product);
		$msg = array();
		$result = $db->getAllData("SELECT INITIAL_MIN_AMOUNT, INITIAL_MAX_AMOUNT, BALANCE FROM product_tb pt JOIN balance_tb bt ON pt.ID=bt.PRODUCT_ID where NAME = '$product' AND pt.CCODE ".$_COOKIE["ccode"]."");
		if($result!==0){
		foreach($result as $row)
        {
            $this->initial_min =number_format($row['INITIAL_MIN_AMOUNT']);
            $this->initial_max = number_format($row['INITIAL_MAX_AMOUNT']);
        	$this->balance = number_format($row['BALANCE']);
			
			$msg[] = array("initial_min" => $this->initial_min, "initial_max" => $this->initial_max, "balance" => $this->balance);
        }
		echo json_encode($msg);
	}
	}
}
?>