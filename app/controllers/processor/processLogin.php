<?php 
class amwork_controller extends route
{

	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $role;
	private $user;
	private $pass, $cordinate;
	private $surname;
	private $ccode;
	private $othername, $company;
	private $contractor_type, $id;
	private $conn;

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
	 $this->login();
	}

	function login()
	{
		$_SESSION['active'] = '0';
	    $ipaddress = getenv("REMOTE_ADDR");
        unset($_SESSION['id']);
		unset($_SESSION['role']);
		unset($_SESSION['username']);
		$msg = '';
		extract($_POST);
		$db = $this->user_initing;
		$user = $db->cleanInput($user);
		$pass = $db->password($db->cleanInput($pass));
		$cordinate = $db->cleanInput($cordinate);
		$_SESSION['username'] = $user;
		$msg = array();
		$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
		if(is_numeric(strpos($ua, "mobile"))){
		 $device = "Mobile"; 	
		}else{
		 $device = "Desktop";	
		}
		$os = strtoupper(substr(PHP_OS, 0, 20));
		
		$result = $db->getAllData("SELECT * from admin_tb where USERNAME='$user' AND PASSWORD='$pass' AND STATUS_ID = '1'");
		if($result !== 0){
		foreach($result as $row)
        {
            $this->id = $row['CODE'];
            $this->role = $row['USER_ROLE'];
      		$this->surname = $row['SURNAME'];
      		$this->othername = $row['OTHERNAME'];
      		$this->ccode = $row['CCODE'];
            $_SESSION['id'] = $row['CODE'];
            $_SESSION['role'] = $row['USER_ROLE'];
            $_SESSION['status'] = $row['USER_ROLE'];
            $_SESSION['company'] = $row['COMPANY'];
            $_SESSION['fullname'] = $row['OTHERNAME']." ".$row['SURNAME'];
            setcookie("ccode", $row['CCODE'], time() + (86400 * 30), "/");

            $msg[] = array("status"=>"success", "id"=>$this->id, "role"=>$this->role, "surname"=>$this->surname, "othername"=>$this->othername, "company"=>$this->company);
        }
        
            if(isset($this->id)){
				$params = array($user,$pass, 'login', 'success', $ipaddress, $cordinate, $os, $device, $this->ccode);
                $query = "INSERT INTO activity_tb (USERNAME, PASSWORD, ACTIVITY, RESULT, IPADDRESS, LOCATION, OS, DEVICE_TYPE,CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
				$insert_contribution = $db->InsertRecords($query, $params);

		    if($db->updateValidation($this->ccode)){
		     	if(!$db->isExpire($this->ccode)){
		     	// $db->checkpost();
			    if($this->calcInterest()){
			      echo json_encode($msg);	
			      }
			 	 }else{
			 	echo json_encode(array("status"=>"expire", "message"=>"Account has Expired!"));
			 	}
		     }else{
		     	echo json_encode(array("status"=>"notval", "message"=>"Failed to validate account"));
		     }			 
            }else{
				$params = array($user,$pass, 'login', 'failed', $ipaddress, $cordinate, $os, $device, $this->ccode);
                $query = "INSERT INTO activity_tb (USERNAME, PASSWORD, ACTIVITY, RESULT, IPADDRESS, LOCATION, OS, DEVICE_TYPE,CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
				$insert_contribution = $db->InsertRecords($query, $params);

				echo json_encode(array("status"=>"failed", "message"=>"Invalid Username or Password"));
            }

		  
			  
		}else{
		    $params = array($user,$pass, 'login', 'failed', $ipaddress, $cordinate, $os, $device, "000000");
		    $query = "INSERT INTO activity_tb (USERNAME, PASSWORD, ACTIVITY, RESULT, IPADDRESS, LOCATION, OS, DEVICE_TYPE, CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
		    
		    $msg[] = array("status"=>"failed", "message"=>"Invalid Username or Password");
		     echo json_encode($msg); 
		  }
	}

	function calcInterest()
		{
		 $db=$this->user;
		$ccode = $_COOKIE["ccode"];
		$result =$this->user->getAllData("SELECT ACCOUNT_NO, PRODUCT_ID, SUBSCRIPTION, ACC_STATUS, DATE_CREATED, DATE_MODIFIED from account_tb where PRODUCT_ID = 2 AND CCODE = $ccode ORDER BY ID DESC LIMIT 1000");
		if($result!==0){
		foreach($result as $row)
        {
            $this->account_no = $row['ACCOUNT_NO'];
            $this->product_id = $row['PRODUCT_ID'];
            $this->subscription = $row['SUBSCRIPTION'];
            $this->acc_status = $row['ACC_STATUS'];
            $this->date_created = $row['DATE_CREATED'];
            $this->date_modified = $row['DATE_MODIFIED'];
            
            
        //cHECK if interest is calculated already 
        $year = date("Y"); 
        $month = date('m');       
        $this->interest = $this->user->get_data_here_value("SELECT ID from interest_tb where YEAR = '$year' AND MONTH = '$month' AND ACCOUNT_NUMBER = '$this->account_no' AND CCODE = $ccode", "ID");
        if($this->interest == 0){
        //Check if account is valid
        if(isset($this->acc_status)&&$this->acc_status == 0){
    	 $result = $this->user->getAllData("SELECT INTEREST_RATE, INTEREST_PERIOD from product_tb where ID = '$this->product_id' AND CCODE = $ccode");
    		foreach($result as $row)
        {
           $this->rate = $row['INTEREST_RATE'];
           $this->period = $row['INTEREST_PERIOD']; 
        }
        if($this->rate !=0 && $this->product_id == 2){
            
            $currDate = date('Y-m-d');
		    $start = strtotime($this->date_modified);
            $end = strtotime($currDate);
            $end = ceil(abs($end) / 86400);
            $start =  ceil(abs($start) / 86400);
            $diff = $end - $start;
            $mature_date =  $this->period - $diff;
            

            if($mature_date <= 0){
            //Fetch balance     
            $this->balance = $this->user->get_data_here_value("SELECT BALANCE FROM balance_tb where ACCOUNT_NUMBER = '$this->account_no' AND CCODE = $ccode", "BALANCE");
            $hcode=$db->hcode();
            $amount = $this->rate/100 * $this->balance;            
            $query = "INSERT INTO interest_tb (PRODUCT_ID, ACCOUNT_NUMBER, ACCRUE_STATUS, YEAR, MONTH, AMOUNT, DATE_CREATED, CCODE, HCODE) VALUES ('$this->product_id', '$this->account_no', '0', '$year', '$month', '$amount', '$currDate', $ccode, '$hcode')";
		   	$stmt = $this->conn->link->prepare($query);
		   	$stmt->execute();
		   	
		   	if($stmt){
		   	$query = "UPDATE account_tb SET DATE_MODIFIED = '$currDate' where ACCOUNT_NO = '$this->account_no' AND CCODE = $ccode";
    		$stmt = $this->conn->link->prepare($query);
    		$stmt->execute();
		   	                                }
                                      }
                                  }
                            }
                        
            
                }else{
   
                }

        	 }
        	}
          return true;
        }
}
?>