<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $surname;
	private $firstname;
	private $lastname;
	private $othername;
	private $contact1;
	private $contact2;
	private $identification;
	private $identification_no;
	private $region;
	private $city;
	private $certification;
	private $year;
	private $profession;
	private $code;
	private $date;
	private $customerid;
	private $requestid, $custid, $currDate;
	private $amount;
    private $transid;
	private $method;
	private $gender;
	private $dob;
	private $contact;
	private $email;
	private $level;
	private $pc;
	private $status;
	private $course;
	private $expectation;
	private $receipt;
	private $receipient;
	private $paidby;


	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
	}


    
	function post_register()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$name = $db->cleanInput($name);
		$contact = $db->cleanInput($contact);
		$password = $db->cleanInput($password);
		
		//Check if contact already exist
		$query_check = "SELECT * from earn_auth where CONTACT = '$contact'";
		$stmt = $this->conn->link->prepare($query_check);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if(sizeof($result) > 0){
		    echo json_encode('exist');
		}else{
		    
		    $query = "INSERT INTO earn_auth (USER_NAME, CONTACT, PASSWORD) VALUES ('$name','$contact', '$password')";
		   
		   	$stmt2 = $this->conn->link->prepare($query);
		   	$stmt2->execute();
		   	 
		   	 if($stmt2){
		   	      echo json_encode('success');
		   	 }else{
		   	     echo json_encode('failed');
		   	 }
		}
	}

		

	function post_sms()
	   {
		extract($_POST);
		$db = $this->user_initing;

		$username = $db->cleanInput($username);
		$message = $db->cleanInput($message);
		$contact = $db->cleanInput($contact);

		$query = "INSERT INTO sms_tb (CONTACT, MESSAGE, SENT_BY) VALUES ('$contact', '$message', '$username')";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
	
	}
	
	


	function post_payment()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$date = $db->cleanInput($date);
		$refid = $db->cleanInput($refid);
		$customer = $db->cleanInput($customer);
		$amount = $db->cleanInput($amount);
		$method = $db->cleanInput($method);
		$commission = $db->cleanInput($commission);
		$username = $_SESSION['username'];
	
		$query = "SELECT STATUS from referral_tb where ID = '$refid'";
	    $stmt = $this->conn->link->prepare($query);
    	$stmt->execute();
    	
        $result = $stmt->fetchAll();
		$msg = array();
		foreach($result as $row)
        {
        	$this->status = $row["STATUS"];

        }
        
        if($this->status == '1'){
            
        $query = "INSERT INTO payment_tb (REF_ID, CUSTOMER, AMOUNT, METHOD, CREATED_BY) VALUES ('$refid', '$customer', '$amount', '$method', '$username')";
	    $stmt = $this->conn->link->prepare($query);
    	$stmt->execute();
		
		$query = "INSERT INTO commission_tb (REF_ID, AMOUNT, PAYMENT_STATUS) VALUES ('$refid','$commission', 'Unpaid')";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		
		 $query = "UPDATE referral_tb set STATUS = 2 where ID = '$refid'";
         $stmt = $this->conn->link->prepare($query);
		 $stmt->execute();
		 
    		 if($stmt){
    		     echo json_encode('success');
    		 }else{
    		     echo json_encode('failed');
    		 }
            
        }else{
            echo json_encode('already');
        }
	
	}
	
	





	public function index()
	{
		 
		extract($_POST);


		 if(isset($rotator))
		 {

		 	switch ($rotator) {
		 		    case 1:
		 			$this->app_user();
	 			    break;

	 			    case 2: 
	 				$this->admin_user();
	 		    	 break;

	 			    case 40 : 
	 			 	$this->post_register();
	 			 	break;

	 			    case 4: 
	 			 	$this->issued();
	 			 	break;

	 			 	case 6: 
	 			 	$this->post_registration();
	 			 	break;
	 			 	
	 			 	case 8: 
	 			 	$this->post_payment();
	 			 	break;

	 			 	case 12: 
	 			 	$this->post_admin_account();
	 			 	break;

		 		default:
		 			echo $rotator;
		 		break;
		 	}
		 } 
	}
}

?>