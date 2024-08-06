<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $posted_by, $fee_type, $current_balance, $date, $deposits, $withdrawals, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

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
		
		$result = $db->getAllData("SELECT dt.ID, FEE_TYPE, AMOUNT, FIRSTNAME, LASTNAME, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED FROM client_tb ct JOIN charge_tb dt on ct.ID=dt.CLIENT_ID WHERE ct.CCODE = ".$_COOKIE["ccode"]." ORDER BY dt.DATE_CREATED DESC");
		if($result !==0){
		foreach($result as $row)
        {
            $this->id = $row['ID'];
            $this->fname = $row['FIRSTNAME'];
        	$this->lname = $row["LASTNAME"];
        	$this->othername = $row["OTHERNAME"];
        	$this->amount = $row['AMOUNT'];
        	$this->fee_type = $row['FEE_TYPE'];
        	$this->current_balance += $this->amount;
        	$this->account_number = $row['ACCOUNT_NUMBER'];
        	$this->date = $row['DATE_CREATED'];

			$msg[] = array("id" => $this->id, "name" => $this->fname." ".$this->lname." ".$this->othername, "amount" => $this->amount, "fee_type" => $this->fee_type, "current_balance" => $this->current_balance, "account_number" => $this->account_number, "date" => $this->date);
        }
        // echo $search;
		echo json_encode($msg);
	}
	}
}
?>