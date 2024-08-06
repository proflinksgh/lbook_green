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
		$msg1 = array();
		$msg2 = array();
		$msg3 = array();
		$count = 0;
		$accno = $db->cleanInput($accno);

		$result=$db->getAllData("SELECT DATE_CREATED, ID, AMOUNT, CREATED_BY FROM deposit_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
		if($result !== 0){
		foreach($result as $row)
        {
        	$created_by = $row["CREATED_BY"];
        	$created_by = $db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME from admin_tb WHERE CODE = $created_by AND CCODE = ".$_COOKIE["ccode"]."","NAME");

			$msg[] = array("id"=>$row["ID"], "operation" => "Deposit", "amount" => $row["AMOUNT"], "date_created" => $row["DATE_CREATED"], "created_by"=>$created_by);
           }
        }else{
        	$msg[] ="none";
        }


        $result=$db->getAllData("SELECT DATE_CREATED, ID, AMOUNT, CREATED_BY, PHOTO FROM withdrawal_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
        if($result !== 0){
		foreach($result as $row)
        {
        	$created_by = $row["CREATED_BY"];
        	$created_by = $db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME from admin_tb WHERE CODE = $created_by AND CCODE = ".$_COOKIE["ccode"]."","NAME");

			$msg1[] = array("id"=>$row["ID"], "operation" => "Withdrawal", "amount" => $row["AMOUNT"], "date_created" => $row["DATE_CREATED"], "created_by"=>$created_by, "photo"=>"<img src='upload/".$row["PHOTO"]."' width='100' height='100'>");
        }
      }else{
      	$msg1[] ="none";
      }



        $result=$db->getAllData("SELECT DATE_CREATED, ID, AMOUNT, FEE_TYPE FROM charge_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC");
        if($result !== 0){
		foreach($result as $row)
        {
			$msg2[] = array("id"=>$row["ID"], "feetype" =>$row["FEE_TYPE"], "amount" => $row["AMOUNT"], "date_created" => $row["DATE_CREATED"]);
        }
      }else{
      	$msg2[] ="none";
      }


       $result=$db->getAllData("SELECT DATE_CREATED, ID, AMOUNT, YEAR, MONTH FROM interest_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC");
        if($result !== 0){
		foreach($result as $row)
        {
			$msg3[] = array("id"=>$row["ID"], "amount" =>$row["AMOUNT"], "year" => $row["YEAR"], "month" => $row["MONTH"], "date_created" => $row["DATE_CREATED"]);
        }
      }else{
      	$msg3[] ="none";
      }

		echo json_encode(array("dep_array"=>$msg, "with_array"=>$msg1, "fee_array"=>$msg2, "interest_array"=>$msg3));
	  }
	}
?>