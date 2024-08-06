<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $posted_by, $current_balance, $date, $deposits, $withdrawals, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

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
		
		if(isset($_SESSION['id'])){
		 $status = $_SESSION['role'];
		 $user = $_SESSION['id'];
		if(isset($status)){
		 if($status == '1'){
		 	 if(isset($_POST["key"])){
		  	if($_POST["inptype"]==="agent"){
		  	 $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME,  dt.CREATED_BY, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE dt.CREATED_BY = ".$_POST["key"]." ORDER BY dt.ID DESC");  	
		  	}else if($_POST["inptype"]==="accno"){
		  	 $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME,  dt.CREATED_BY, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE ACCOUNT_NUMBER = '".$_POST["key"]."' ORDER BY dt.ID DESC");  	
		  	}else if($_POST["inptype"]==="amount"){
		  	 $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME,  dt.CREATED_BY, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE AMOUNT = '".$_POST["key"]."' ORDER BY dt.ID DESC");  	
		  	}
		  }else{
		    $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE at.CCODE = ".$_COOKIE["ccode"]." ORDER BY dt.ID DESC LIMIT 10000");  
		  }
		    
		}else{
			if(isset($_POST["key"])){
             $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE CREATED_BY ='$user' WHERE ACCOUNT_NUMBER = '".$_POST["key"]."' ORDER BY dt.ID DESC"); 
			}else{
			  $result = $db->getAllData("SELECT dt.ID, AMOUNT, FIRSTNAME, LASTNAME, ct.OTHERNAME, ACCOUNT_NUMBER, dt.DATE_CREATED, USERNAME FROM client_tb ct JOIN deposit_tb dt on ct.CODE=dt.CLIENT_ID JOIN admin_tb at ON at.CODE = dt.CREATED_BY WHERE dt.CREATED_BY=$user AND at.CCODE = ".$_COOKIE["ccode"]." ORDER BY dt.ID DESC LIMIT 10000");  
			}  
		}
		
		if($result != 0){
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
            
            echo json_encode($msg);
		}else{
		    echo json_encode('none');
		  }
		}else{
			echo json_encode('reset');
		}
	  }else{
	  	echo json_encode('expire');
	  }
	}
}
?>