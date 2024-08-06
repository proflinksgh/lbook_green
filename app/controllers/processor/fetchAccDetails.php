<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $fname, $othername;

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
		$this->user->calculateBalance($_POST["accno"]);
	    $this->fetch_deduction();
	}
       function fetch_deduction()
		{
		extract($_POST);
		$db = $this->user_initing;
		$accno = $db->cleanInput($accno);
		$msg = array();
		if(isset($_COOKIE["ccode"])){
		$details=$db->getAllData("SELECT adt.ID, CONCAT(FIRSTNAME, ' ', LASTNAME, ' ', OTHERNAME) AS fullname, adt.CONTACT_1, adt.CITY, adt.AREA, adt.CODE, acc.PRODUCT_ID, acc.ACC_STATUS, acc.SUBSCRIPTION, adt.IDNUMBER, ACCOUNT_NO, IMAGE_PATH, ACC_STATUS, SMS_STATUS, acc.DATE_CREATED FROM client_tb adt JOIN account_tb acc ON adt.CODE = acc.CLIENT_ID WHERE ACCOUNT_NO = '$accno' AND acc.CCODE = ".$_COOKIE["ccode"]."");
		if($details != 0){
		foreach($details as $row)
        {
        	if($row["ACC_STATUS"]=="0"){
        	   $acc_status = "Active";
        	}else{
        		$acc_status = "Inactive";
        	}

        	$lastdeposit = $db->get_data_here_value("SELECT AMOUNT from deposit_tb WHERE ACCOUNT_NUMBER  =  '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1","AMOUNT");

        	$deposit_post = $db->get_data_here_value("SELECT CREATED_BY from deposit_tb WHERE ACCOUNT_NUMBER  =  '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1","CREATED_BY");

        	$deposit_post = $db->get_data_here_value("SELECT CONCAT(SURNAME, ' ', OTHERNAME) AS name FROM admin_tb WHERE CODE = $deposit_post AND CCODE = ".$_COOKIE["ccode"]."","name");

        	$withdrawal_post = $db->get_data_here_value("SELECT CREATED_BY from withdrawal_tb WHERE ACCOUNT_NUMBER  =  '$accno' AND CCODE = ".$_COOKIE["ccode"]." AND CREATED_BY IS NOT NULL ORDER BY ID DESC LIMIT 1","CREATED_BY");

        	$withdrawal_post = $db->get_data_here_value("SELECT CONCAT(SURNAME, ' ', OTHERNAME) AS name FROM admin_tb WHERE CODE = $withdrawal_post AND CCODE = ".$_COOKIE["ccode"]."","name");

        	$lastdeposit_date = $db->get_data_here_value("SELECT DATE_CREATED from deposit_tb WHERE ACCOUNT_NUMBER='$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1","DATE_CREATED");

        	$lastwithdrawal = $db->get_data_here_value("SELECT AMOUNT from withdrawal_tb WHERE ACCOUNT_NUMBER  =  '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1","AMOUNT");
        	$lastwithdrawal_date = $db->get_data_here_value("SELECT DATE_CREATED from withdrawal_tb WHERE ACCOUNT_NUMBER  =  '$accno' AND CCODE = ".$_COOKIE["ccode"]." ORDER BY ID DESC LIMIT 1","DATE_CREATED");

        	$balance = $db->get_data_here_value("SELECT BALANCE FROM balance_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."","BALANCE");
        	$product = $db->get_data_here_value("SELECT NAME FROM product_tb WHERE CODE = ".$row["PRODUCT_ID"]." AND CCODE = ".$_COOKIE["ccode"]." ","NAME");
        	$deposit=$db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM deposit_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."", "amount");
			$withdrawal=$db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM withdrawal_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."", "amount");
			$charge=$db->get_data_here_value("SELECT SUM(AMOUNT) AS amount FROM charge_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."", "amount");
			$balance=$db->get_data_here_value("SELECT BALANCE FROM balance_tb WHERE ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."", "BALANCE");
			$msg[] = array("subscription"=>$row["SUBSCRIPTION"], "acc_status"=>$acc_status, "id"=>$row["ID"], "lwithpost"=>$withdrawal_post, "ldepost"=>$deposit_post, "lastwithdrawal_date"=>$lastwithdrawal_date, "lastwithdrawal"=>$lastwithdrawal, "lastdeposit"=>$lastdeposit, "lastdeposit_date"=>$lastdeposit_date, "balance"=>$balance, "deposit" => $deposit, "withdrawal" => $withdrawal, "charge" => $charge, "code" => $row['CODE'], "fullname" => $row['fullname'], "phone"=>$row['CONTACT_1'], "photo"=>$row['IMAGE_PATH'], "city"=>$row['CITY'], "product"=>$product, "area"=>$row['AREA'], "accno"=>$row["ACCOUNT_NO"], "idno"=>$row["IDNUMBER"], "acc_status"=>$row["ACC_STATUS"], "sms_status"=>$row["SMS_STATUS"],  "date_created"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}else{
		    echo json_encode('none'); 
		}
	  }else{
	     echo json_encode('expire'); 
	  }
	}
}
?>