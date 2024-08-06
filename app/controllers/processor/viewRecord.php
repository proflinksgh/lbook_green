<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $estdate, $postby, $project, $custid, $date_pay, $paystatus, $datepaid;
	private $username, $firstname, $lastname, $created, $modified;
	private $password;
	private $contact;
	private $acc_type;
	private $request_id;
	private $pc_type; 
	private $model;
	private $issue;
	private $date;
	private $time;
	private $status;
	private $experience;

	private $os;
	private $software;
	private $architecture;
	private $cost;
	private $paidby;
	private $receipient;

	private $surname;
	private $othername;
	private $profession;
	private $contact1;
	private $contact2;
	private $region;
	private $city;
	private $identification;
	private $identification_no, $requestid, $commission;
	private $certification;
	private $type;
	private $amount;

	private $target;
	private $contractor_type, $service, $percentage;
	private $contractor_name;
	private $code;
	private $gender;
	private $highest;
	private $pc;
	private $reason;
	private $course;
	private $expect;
	private $receiver;
	private $sender;
	private $message;
	
	private $refcode;
	private $transid;


	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
	}
	
	
	    function __construct_dwa()
	{
	    $this->user_tag_dwa = $this->model('master_class_dwa');

		$this->user_initing_dwa = $this->model('extend_function_dwa');

		$this->date_composer = $this->user_initing_dwa->timer;

		$this->conn2 = new master_class_dwa();
	}
	
	


	function app_user()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "select USER_ID, USERNAME, PASSWORD, CONTACT, DATE_CREATED, DATE_MODIFIED from login_tb WHERE STATUS_ID = 1 ORDER BY USER_ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->id = $row["USER_ID"];
        	$this->username = $row['USERNAME'];
			$this->password = $row['PASSWORD'];
			$this->contact = $row['CONTACT'];
			$this->date_created = $row['DATE_CREATED'];
			$this->date_modified = $row["DATE_MODIFIED"];
			
			$msg[] = array("id" => $this->id, "username" => $this->username, "password" => $this->password,
				"contact" => $this->contact, "date_created" => $this->date_created, "date_modified" => $this->date_modified);
        }
		
		echo json_encode($msg);
	}





	function hardware_req()
	{
		extract($_POST);
		$db = $this->user_initing;


		$query = "select * from hardware_req_tb order by USER_ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->request_id = $row["REQUEST_ID"];
        	$this->id = $row["USER_ID"];
        	$this->pc_type = $row['PC_TYPE'];
			$this->model = $row['MODEL'];
			$this->issue = $row['ISSUE'];
			$this->date = $row['DATE'];
			$this->status = $row["STATUS"];
			
			$msg[] = array("request_id" => $this->request_id, "user_id" => $this->id, "pc_type" => $this->pc_type, "model" => $this->model,
				"issue" => $this->issue, "date" => $this->date, "status" => $this->status);
        }
		

		echo json_encode($msg);
	}




	function networking_req()
	{
		extract($_POST);
		$db = $this->user_initing;

		$msg = array();


		$query = "select * from network_req_tb order by USER_ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->request_id = $row["REQUEST_ID"];
        	$this->id = $row["USER_ID"];
        	$this->target = $row['TARGET'];
			$this->project = $row['PROJECT'];
			$this->date = $row['DATE'];
			$this->status = $row["STATUS"];
			
			$msg[] = array("request_id" => $this->request_id, "user_id" => $this->id, "target" => $this->target, "project" => $this->project,
				"date" => $this->date, "status" => $this->status);
        }
		

		echo json_encode($msg);
	}





		function server_req()
	{
		extract($_POST);
		$db = $this->user_initing;

		$msg = array();


		$query = "select * from server_req_tb order by USER_ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->request_id = $row["REQUEST_ID"];
        	$this->id = $row["USER_ID"];
        	$this->target = $row['TARGET'];
			$this->project = $row['PROJECT'];
			$this->date = $row['DATE'];
			$this->status = $row["STATUS"];
			
			$msg[] = array("request_id" => $this->request_id, "user_id" => $this->id, "target" => $this->target, "project" => $this->project,
				"date" => $this->date, "status" => $this->status);
        }
		

		echo json_encode($msg);
	}





		function cctv_req()
	{
		extract($_POST);
		$db = $this->user_initing;

		$msg = array();


		$query = "select * from cctv_req_tb order by USER_ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->request_id = $row["REQUEST_ID"];
        	$this->id = $row["USER_ID"];
        	$this->target = $row['TARGET'];
			$this->project = $row['PROJECT'];
			$this->date = $row['DATE'];
			$this->status = $row["STATUS"];
			
			$msg[] = array("request_id" => $this->request_id, "user_id" => $this->id, "target" => $this->target, "project" => $this->project,
				"date" => $this->date, "status" => $this->status);
        }
		

		echo json_encode($msg);

	}





	function view_sent()
	{
		extract($_POST);
		$db = $this->user_initing;

		$msg = array();


		$query = "select * from sms_tb order by ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->id = $row["ID"];
        	$this->receiver = $row["CONTACT"];
        	$this->message = $row['MESSAGE'];
			$this->sender = $row['SENT_BY'];
			$this->date = $row['DATE'];
			
			$msg[] = array("id" => $this->id, "receiver" => $this->receiver, "message" => $this->message, "sender" => $this->sender,
				"date" => $this->date);
        }
		

		echo json_encode($msg);
	}








	function software_req()
	{
		extract($_POST);
		$db = $this->user_initing;

		$msg = array();


		$query = "select * from software_req_tb order by USER_ID DESC";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->request_id = $row["REQUEST_ID"];
        	$this->id = $row["USER_ID"];
        	$this->os = $row['OPERATING_SYSTEM'];
			$this->architecture = $row['ARCHITECTURE'];
			$this->software = $row['SOFTWARE'];
			$this->date = $row['DATE'];
			$this->cost = $row['BASIC_COST'];
			$this->status = $row["STATUS"];
			
			$msg[] = array("request_id" => $this->request_id, "user_id" => $this->id, "os" => $this->os, "architecture" => $this->architecture,
				"software" => $this->software, "date" => $this->date, "cost" => $this->cost, "status" => $this->status);
        }
		

		echo json_encode($msg);
	}


		function admin_user()
	{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$query = "select ID, ACC_TYPE, USERNAME, PASSWORD, SURNAME, OTHERNAME, CONTACT, DATE_CREATED from admin_login_tb WHERE ACC_STATUS = 1 ORDER BY ID DESC;";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
        	$this->id = $row["ID"];
        	$this->acc_type = $row["ACC_TYPE"];
        	$this->username = $row['USERNAME'];
			$this->password = $row['PASSWORD'];
			$this->surname = $row['SURNAME'];
			$this->othername = $row['OTHERNAME'];
			$this->contact = $row['CONTACT'];
			$this->created = $row['DATE_CREATED'];
			
			$msg[] = array("id" => $this->id, "acc_type" => $this->acc_type, "username" => $this->username, "password" => $this->password, "surname" => $this->surname, "othername" => $this->othername,
				"contact" => $this->contact, "created" => $this->created);
        }
		

		echo json_encode($msg);
	}




	function payment()
	{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$query = "select DATE_CREATED, ID, REF_ID, CUSTOMER, AMOUNT, METHOD, CREATED_BY from payment_tb";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
            $this->date = $row['DATE_CREATED'];
            $this->id = $row["ID"];
        	$this->refid = $row["REF_ID"];
        	$this->customer = $row["CUSTOMER"];
        	$this->amount = $row['AMOUNT'];
			$this->method = $row['METHOD'];
			$this->received = $row['CREATED_BY'];
		
			$msg[] = array("date" => $this->date, "id" => $this->id, "refid" => $this->refid, "customer" => $this->customer, "amount" => $this->amount, "method" => $this->method, "received" => $this->received);
        }
		

		echo json_encode($msg);
	}
	
	

    function view_debtors()
	{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$query = "select * from debtors_tb";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		foreach($result as $row)
        {
        	$this->id = $row["ID"];
        	$this->custid = $row['CUSTOMER_ID'];
        	$this->request_id = $row['REQUEST_ID'];
			$this->amount = $row['AMOUNT'];
			$this->date_pay = $row['DATE_TO_PAY'];
			$this->date = $row["DATE"];
			$msg[] = array("date" => $this->date, "id" => $this->id, "custid" => $this->custid, "request_id" => $this->request_id, "amount" => $this->amount, "date_pay" => $this->date_pay);
        }
		echo json_encode($msg);
	}

	   function view_expenses()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$query = "select * from expenses_tb";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		foreach($result as $row)
        {
        	$this->date = $row["DATE"];
        	$this->id = $row["ID"];
        	$this->details = $row['DETAILS'];
        	$this->amount = $row['AMOUNT'];
			$this->receipient = $row['RECEIPIENT'];
			$this->paidby = $row['PAID_BY'];
			$this->receipt = $row['RECEIPT'];
			
			$msg[] = array("date" => $this->date, "id" => $this->id, "details" => $this->details, "amount" => $this->amount, "receipient" => $this->receipient, "paidby" => $this->paidby, "receipt" => $this->receipt);
        }
		echo json_encode($msg);
	}




	function view_application()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT * from applicant_tb where STATUS = '1'";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        	
        	$this->date = $row["DATE_REG"];
        	$this->code = $row["REF_CODE"];
        	$this->email = $row["EMAIL"];
        	$this->surname = $row['SURNAME'];
			$this->othername = $row['OTHERNAME'];
			$this->contact = $row['CONTACT'];
			$this->gender = $row['GENDER'];
			$this->region = $row['REGION'];
			$this->city = $row["CITY"];
			$this->highest = $row["HIGHEST_EDUCATION"];
			$this->pc = $row["HAVE_PC"];
			$this->reason = $row["REASON"];
			$this->course = $row["COURSE"];
			$this->expect = $row["COURSE_EXPECT"];
	
			
			$msg[] = array("date" => $this->date, "email" => $this->email, "code" => $this->code, "surname" => $this->surname,
				"othername" => $this->othername, "contact" => $this->contact, "gender" => $this->gender, "region" => $this->region, "city" => $this->city, "highest" => $this->highest, "pc" => $this->pc, "reason" => $this->reason, "course" => $this->course, "expect" => $this->expect);
        }
		

		echo json_encode($msg);
	}
	
	
	
	
		function earn_users()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT * from earn_auth ORDER BY USER_ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();
		$msg = array();

		foreach($result as $row)
        {
        	$this->id = $row["USER_ID"];
        	$this->username = $row["USER_NAME"];
        	$this->contact = $row["CONTACT"];
        	$this->password = $row['PASSWORD'];
			$this->created = $row['DATE_CREATED'];
			$this->modified = $row['DATE_MODIFIED'];
			$msg[] = array("id" => $this->id, "username" => $this->username, "contact" => $this->contact, "password" => $this->password, "created" => $this->created, "modified" => $this->modified);
        }
		
		echo json_encode($msg);
	}



	function all()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT rt.DATE_CREATED, rt.ID, PICK, PICK_CONTACT, DISPATCH, DISPATCH_CONTACT, rt.DESCRIPTION, USER_NAME, st.DETAIL from referral_tb rt JOIN status_tb st ON rt.STATUS = st.ID JOIN earn_auth et ON rt.USER_ID = et.USER_ID ORDER BY ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$msg = array();
		foreach($result as $row)
        {
        	$this->created = $row["DATE_CREATED"];
        	$this->id = $row["ID"];
        	$this->pick = $row["PICK"];
        	$this->pick_contact = $row['PICK_CONTACT'];
			$this->dispatch = $row['DISPATCH'];
			$this->dispatch_contact = $row['DISPATCH_CONTACT'];
			$this->item = $row['DESCRIPTION'];
			$this->user = $row['USER_NAME'];
			$this->status = $row["DETAIL"];
			$msg[] = array("created" => $this->created, "id" => $this->id, "pick" => $this->pick, "pick_contact" => $this->pick_contact,
				"dispatch" => $this->dispatch, "dispatch_contact" => $this->dispatch_contact, "item" => $this->item, "user" => $this->user, "status" => $this->status);
        }
		echo json_encode($msg);
	}
	
	
	function completed()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT rt.DATE_CREATED, rt.ID, PICK, PICK_CONTACT, DISPATCH, DISPATCH_CONTACT, rt.DESCRIPTION, USER_NAME, st.DETAIL from referral_tb rt JOIN status_tb st ON rt.STATUS = st.ID JOIN earn_auth et ON rt.USER_ID = et.USER_ID  where st.ID='2' ORDER BY ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$msg = array();
		foreach($result as $row)
        {
        	$this->created = $row["DATE_CREATED"];
        	$this->id = $row["ID"];
        	$this->pick = $row["PICK"];
        	$this->pick_contact = $row['PICK_CONTACT'];
			$this->dispatch = $row['DISPATCH'];
			$this->dispatch_contact = $row['DISPATCH_CONTACT'];
			$this->item = $row['DESCRIPTION'];
			$this->user = $row['USER_NAME'];
			$this->status = $row["DETAIL"];
			$msg[] = array("created" => $this->created, "id" => $this->id, "pick" => $this->pick, "pick_contact" => $this->pick_contact,
				"dispatch" => $this->dispatch, "dispatch_contact" => $this->dispatch_contact, "item" => $this->item, "user" => $this->user, "status" => $this->status);
        }
		echo json_encode($msg);
	}
	
	
	
		function declined()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT rt.DATE_CREATED, rt.ID, PICK, PICK_CONTACT, DISPATCH, DISPATCH_CONTACT, rt.DESCRIPTION, USER_NAME, st.DETAIL from referral_tb rt JOIN status_tb st ON rt.STATUS = st.ID JOIN earn_auth et ON rt.USER_ID = et.USER_ID  where st.ID='3' ORDER BY ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$msg = array();
		foreach($result as $row)
        {
        	$this->created = $row["DATE_CREATED"];
        	$this->id = $row["ID"];
        	$this->pick = $row["PICK"];
        	$this->pick_contact = $row['PICK_CONTACT'];
			$this->dispatch = $row['DISPATCH'];
			$this->dispatch_contact = $row['DISPATCH_CONTACT'];
			$this->item = $row['DESCRIPTION'];
			$this->user = $row['USER_NAME'];
			$this->status = $row["DETAIL"];
			$msg[] = array("created" => $this->created, "id" => $this->id, "pick" => $this->pick, "pick_contact" => $this->pick_contact,
				"dispatch" => $this->dispatch, "dispatch_contact" => $this->dispatch_contact, "item" => $this->item, "user" => $this->user, "status" => $this->status);
        }
		echo json_encode($msg);
	}




    	function new()
	{
		extract($_POST);
		$db = $this->user_initing;
		$query = "SELECT rt.DATE_CREATED, rt.ID, PICK, PICK_CONTACT, DISPATCH, DISPATCH_CONTACT, rt.DESCRIPTION, USER_NAME, st.DETAIL from referral_tb rt JOIN status_tb st ON rt.STATUS = st.ID JOIN earn_auth et ON rt.USER_ID = et.USER_ID where st.ID='1' ORDER BY ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$msg = array();
		foreach($result as $row)
        {
        	$this->created = $row["DATE_CREATED"];
        	$this->id = $row["ID"];
        	$this->pick = $row["PICK"];
        	$this->pick_contact = $row['PICK_CONTACT'];
			$this->dispatch = $row['DISPATCH'];
			$this->dispatch_contact = $row['DISPATCH_CONTACT'];
			$this->item = $row['DESCRIPTION'];
			$this->user = $row['USER_NAME'];
			$this->status = $row["DETAIL"];
			$msg[] = array("created" => $this->created, "id" => $this->id, "pick" => $this->pick, "pick_contact" => $this->pick_contact,
				"dispatch" => $this->dispatch, "dispatch_contact" => $this->dispatch_contact, "item" => $this->item, "user" => $this->user, "status" => $this->status);
        }
		echo json_encode($msg);
	}


	function view_registered()
	{
		extract($_POST);
		$db = $this->user_initing;


		$query = "SELECT * from applicant_tb where STATUS = '3'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        	
        	$this->date = $row["DATE_REG"];
        	$this->code = $row["REF_CODE"];
        	$this->email = $row["EMAIL"];
        	$this->surname = $row['SURNAME'];
			$this->othername = $row['OTHERNAME'];
			$this->contact = $row['CONTACT'];
			$this->gender = $row['GENDER'];
			$this->region = $row['REGION'];
			$this->city = $row["CITY"];
			$this->highest = $row["HIGHEST_EDUCATION"];
			$this->course = $row["COURSE"];
	
	
			
			$msg[] = array("date" => $this->date, "email" => $this->email, "code" => $this->code, "surname" => $this->surname,
				"othername" => $this->othername, "contact" => $this->contact, "gender" => $this->gender, "region" => $this->region, "city" => $this->city, "highest" => $this->highest, "course" => $this->course);
        }
		

		echo json_encode($msg);
	}




		function view_completed()
	{
		extract($_POST);
		$db = $this->user_initing;


		$query = "SELECT * from applicant_tb where STATUS = '4'";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        	
        	$this->date = $row["DATE_REG"];
        	$this->code = $row["REF_CODE"];
        	$this->email = $row["EMAIL"];
        	$this->surname = $row['SURNAME'];
			$this->othername = $row['OTHERNAME'];
			$this->contact = $row['CONTACT'];
			$this->gender = $row['GENDER'];
			$this->region = $row['REGION'];
			$this->city = $row["CITY"];
			$this->highest = $row["HIGHEST_EDUCATION"];
			$this->course = $row["COURSE"];
	
	
			
			$msg[] = array("date" => $this->date, "email" => $this->email, "code" => $this->code, "surname" => $this->surname,
				"othername" => $this->othername, "contact" => $this->contact, "gender" => $this->gender, "region" => $this->region, "city" => $this->city, "highest" => $this->highest, "course" => $this->course);
				
			
        }
		

		echo json_encode($msg);
	}



        
	function view_momofees()
	   {
		extract($_POST);
		$db = $this->user_initing;


		$query = "SELECT * from fee_payment";
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        	
          	$this->date = $row["DATE"];
        	$this->id = $row["ID"];
        	$this->refcode = $row["REF_CODE"];
        	$this->transid = $row["TRANS_ID"];
        	$this->amount = $row["AMOUNT"];
		
			
			$msg[] = array("date" => $this->date, "id" => $this->id, "refcode" => $this->refcode, "transid" => $this->transid,
				"amount" => $this->amount);
        }
		

		echo json_encode($msg);
	}


     


    


   function checkContact()
	{
		extract($_POST);
		$db = $this->user_initing;

		$contact = $db->cleanInput($contact);

		$query = "SELECT CONTACT_1 from contractor_tb where CONTACT_1 = '$contact'";
	
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        
			$this->contact = $row['CONTACT_1'];
		
			$msg[] = array($this->contact);
        }
		

		echo json_encode($msg);
	}
	
	
	
	
	
	
   function commission_view()
	{
		extract($_POST);
		$db = $this->user_initing;

		$query = "SELECT ct.REF_ID, et.USER_NAME, et.CONTACT, AMOUNT, PAYMENT_STATUS, ct.DATE_CREATED FROM earn_auth et JOIN referral_tb rt ON et.USER_ID=rt.USER_ID JOIN commission_tb ct on rt.ID=ct.REF_ID";
	
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
            $this->id = $row['REF_ID'];
            $this->username = $row['USER_NAME'];
            $this->contact = $row['CONTACT'];
			$this->amount = $row['AMOUNT'];
			$this->paystatus = $row['PAYMENT_STATUS'];
			$this->date = $row['DATE_CREATED'];
	
			$msg[] = array("date"=>$this->date, "id"=>$this->id, "username"=>$this->username, "contact"=>$this->contact, "amount"=>$this->amount, "paystatus"=>$this->paystatus);
        }
		

		echo json_encode($msg);
	}
	
	
	
	
	function location_view()
	{
		extract($_POST);
		$db = $this->user_initing;

		$query = "SELECT DISTINCT USER_ID, REGION, CITY from client_location_tb";
	
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
            $this->id = $row['USER_ID'];
			$this->city = $row['CITY'];
			$this->region = $row['REGION'];

			$msg[] = array("id"=>$this->id, "city"=>$this->city, "region"=>$this->region);
        }
		
		echo json_encode($msg);
	}
	
	
	
	
	

   function service_view()
	{
		extract($_POST);
		$db = $this->user_initing;

		$query = "SELECT * from serv_percentage";
	
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        
			$this->id = $row['ID'];
			$this->service = $row['SERVICE'];
			$this->percentage = $row['PERCENTAGE'];
		
			$msg[] = array("id"=>$this->id, "service"=>$this->service, "percentage"=>$this->percentage);
        }
		

		echo json_encode($msg);
	}







   function check_ref_code()
	{

	
		extract($_POST);
		$db = $this->user_initing;

		$code = $db->cleanInput($code);

		$query = "SELECT REF_CODE from applicant_tb where REF_CODE = '$code'";
	
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        
			$this->contact = $row['REF_CODE'];
		
			$msg[] = array($this->contact);
        }
		

		echo json_encode($msg);
	}









	function appointment()
	{
		extract($_POST);
		$db = $this->user_initing;

		$contractor_type = $db->cleanInput($contractor_type);
		$contractor_name = $db->cleanInput($contractor_name);

		if($contractor_name == 'none'){

			$query = "select REQUEST_ID, USERNAME, lt.CONTACT, REGION, CITY, APPOINTMENT_DATE, APPOINTMENT_TIME from appointment_tb at join login_tb lt on at.USER_ID = lt.USER_ID join client_location_tb ct on ct.USER_ID = lt.USER_ID";
		}else{

			$query = "select REQUEST_ID, USERNAME, lt.CONTACT, REGION, CITY, APPOINTMENT_DATE, APPOINTMENT_TIME from appointment_tb at join login_tb lt on at.USER_ID = lt.USER_ID join client_location_tb ct on ct.USER_ID = lt.USER_ID where REQUEST_ID REGEXP '^[$contractor_type]' AND CONTRACTOR LIKE '$contractor_name'";
		}


	
		
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		$msg = array();

		foreach($result as $row)
        {
        	$this->id = $row["REQUEST_ID"];
        	$this->username = $row['USERNAME'];
			$this->contact = $row['CONTACT'];
			$this->region = $row['REGION'];
			$this->city = $row['CITY'];
			$this->date = $row["APPOINTMENT_DATE"];
			$this->time = $row["APPOINTMENT_TIME"];
		
			
			$msg[] = array("id" => $this->id, "username" => $this->username, "contact" => $this->contact,
				"region" => $this->region, "city" => $this->city, "date" => $this->date, "time" => $this->time);
        }
		

		echo json_encode($msg);
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
	 			    case 3: 
	 			 	$this->all();
	 			 	break;
	 			    case 4: 
	 			 	$this->new();
	 			 	break;
	 			 	case 5:
	 			 	$this->completed();
	 			 	break;
	 			 	case 6:
	 			 	$this->declined();
	 			 	break;
	 			 	case 7:
	 			 	$this->payment();
	 			 	break;
	 			 	case 9:
	 			 	$this->commission_view();
	 			 	break;
	 			 	case 30:
	 			 	$this->view_completed();
	 			 	break;
	 			 	case 40:
	 			 	$this->earn_users();
	 			 	break;
		 		default:
		 			echo $rotator;
		 		break;
		 	}
		 } 
	}
}

?>