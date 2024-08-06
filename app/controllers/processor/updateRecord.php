<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $surname;
	private $username;
	private $othername;
	private $contact;
	private $city;
	private $id;
	private $role;
	private $amount;
    private $code;
    private $details;
    private $receipient;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
	}


	function update_commission()
	{
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);

		$query = "UPDATE commission_tb SET PAYMENT_STATUS = 'Paid' where REF_ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
	}



		function update_admin()
	{
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$username = $db->cleanInput($username);
		$surname = $db->cleanInput($surname);
		$othername = $db->cleanInput($othername);
		$contact = $db->cleanInput($contact);
		$password = $db->cleanInput($password);


		$query = "UPDATE links_admin_tb SET USERNAME = '$username', PASSWORD = '$password', SURNAME = '$surname', OTHERNAME = '$othername', CONTACT = '$contact' where ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}
	
	
	
	function update_earn()
	 {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$username = $db->cleanInput($username);
		$contact = $db->cleanInput($contact);
		$password = $db->cleanInput($password);


		$query = "UPDATE earn_auth SET USER_NAME = '$username', PASSWORD = '$password', CONTACT = '$contact' where USER_ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}





		function update_payment()
	{
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$date = $db->cleanInput($date);
		$requestid = $db->cleanInput($requestid);
		$amount = $db->cleanInput($amount);


		$query = "UPDATE payment_tb SET `DATE` = '$date', USER_ID = '$id', REQUEST_ID = '$requestid', AMOUNT = '$amount' where USER_ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}
	
	
	
	
	   function update_expenses()
	    {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$date = $db->cleanInput($date);
		$details = $db->cleanInput($details);
		$amount = $db->cleanInput($amount);
		$receipient = $db->cleanInput($receipient);


		$query = "UPDATE expenses_tb SET `DATE` = '$date', DETAILS = '$details', AMOUNT = '$amount', RECEIPIENT = '$receipient' where ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}





  function update_app_user()
	{

		
		 $currDate = date('Y-m-d H:i:s');

		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		// $role = $db->cleanInput($role);
		$username = $db->cleanInput($username);
		$contact = $db->cleanInput($contact);
		$password = $db->cleanInput($password);


		$query = "UPDATE login_tb SET USERNAME = '$username', PASSWORD = '$password', CONTACT = '$contact', DATE_MODIFIED = ' $currDate'  where USER_ID = '$id'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}






        

  function update_referral()
	{
		extract($_POST);
		$db = $this->user_initing;

		$requestid = $db->cleanInput($requestid);
		$id = $db->cleanInput($id);

		$query = "UPDATE clients_tb SET REQUEST_ID = '$requestid', `STATUS` = '5' where ID = '$id' AND `STATUS` <> 0";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo json_encode('success');
		}else{
				echo json_encode('failed');
		}
		
	}


	


	  function update_to_processed()
	{

		 // $currDate = date('Y-m-d H:i:s');
		extract($_POST);
		$db = $this->user_initing;
	

		$code = $db->cleanInput($code);

		$query = "UPDATE applicant_tb SET `STATUS` = '2' where REF_CODE = '$code'AND `STATUS` <> 0";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo 'success';
		}else{
				echo 'failed';
		}
		
	}





   function update_to_registered()
	{

		 // $currDate = date('Y-m-d H:i:s');
		extract($_POST);
		$db = $this->user_initing;
	

		$code = $db->cleanInput($code);

			$query = "UPDATE applicant_tb SET `STATUS` = '3' where REF_CODE = '$code'AND `STATUS` <> 0";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
	

		if($stmt){
			echo 'success';
		}else{
				echo 'failed';
		}
		
	}





   function update_to_completed()
	{

		 // $currDate = date('Y-m-d H:i:s');
		extract($_POST);
		$db = $this->user_initing;
	

		$code = $db->cleanInput($code);

		$query = "UPDATE applicant_tb SET `STATUS` = '4' where REF_CODE = '$code'AND `STATUS` <> 0";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
		 echo 'success';
		}else{
		 echo 'failed';
		}
		
	}






	public function index()
	{
		extract($_POST);

		 if(isset($rotator))
		 {

		 	switch ($rotator) {
		 		case 9:
		 			$this->update_commission();

	 			break;

	 				case 10:
		 			$this->update_payment();

	 			break;

	 			case 2: 
	 				$this->update_admin();
	 			 break;

	 			 case 1: 
	 			 	$this->update_app_user();
	 			 	break;

		
		 			 case 25: 
	 			 	$this->update_to_processed();
	 			 	break;
	 			 	
	 			 	case 27: 
	 			 	$this->update_expenses();
	 			 	break;

	 			 		 case 28: 
	 			 	$this->update_to_registered();
	 			 	break;

	 			 	 		 case 29: 
	 			 	$this->update_to_completed();
	 			 	break;
	 			 	
	 			 		 	case 34: 
	 			 	$this->update_referral();
	 			 	break;
	 			 	
	 			 			 	case 40: 
	 			 	$this->update_earn();
	 			 	break;


		 		default:
		 		
		 		break;
		 	}
		 } 
	}
}

?>