<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $accNumber;

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
		$accNumber = $db->cleanInput($accNumber);
		$msg = array();
		$result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.ID=dt.CLIENT_ID JOIN admin_tb at ON at.ID = dt.CREATED_BY");
		foreach($result as $row)
        {
            $this->id = $row['ID'];
            $this->fname = $row['FIRSTNAME'];
        	$this->lname = $row["LASTNAME"];
        	$this->othername = $row["OTHERNAME"];
        	$this->amount = $row['AMOUNT'];
        	
        	$this->current_balance += $this->amount;
        	$this->account_number = $row['ACCOUNT_NUMBER'];
        	$this->date = $row['DATE_CREATED'];
        	$this->posted_by = $row['USERNAME'];

			$msg[] = array("id" => $this->id, "name" => $this->fname." ".$this->lname." ".$this->othername, "amount" => $this->amount, "current_balance" => $this->current_balance, "account_number" => $this->account_number, "date" => $this->date, "posted_by" => $this->posted_by);
        }
        // echo $search;
		echo json_encode($msg);
	}
}
?>