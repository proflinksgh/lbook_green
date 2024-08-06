<?php


class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $conn;
	private $user;


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
	    $this->fetch_admin_tb();
		$this->fetch_deposit_tb();
		$this->fetch_product_tb();
		 $this->fetch_withdrawal_tb();
		 $this->fetch_fee_tb();
	    $this->fetch_account_tb();
	     $this->fetch_client_tb();  
	    $this->fetch_balance_tb();  
	    $this->fetch_charge_tb();   
		$this->fetch_activation_tb();
		$this->fetch_subscription_tb();
		$this->exec_delete_tb();
		$this->fetch_check_tb();
	}


    function fetch_fee_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_fee_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$ent_fee = $row->ENTRY_FEE;
		  	$with_fee = $row->WITHDRAWAL_FEE;
		  	$prod_id = $row->PRODUCT_ID;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$output = "";
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM fee_tb where HCODE = '$hcode'","DATE_MODIFIED");
		    if($get_date_modified !== 0){
		       if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE fee_tb SET ENTRY_FEE = '$ent_fee', WITHDRAWAL_FEE = $with_fee, PRODUCT_ID = '$prod_id',DATE_MODIFIED = '$date_modified' where HCODE = '$hcode");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 	}else{
			 		 $output = json_encode(array("status"=>"No action"));
			 	}

		  	 }else{
		  		    	 $params = array($ent_fee, $with_fee, $prod_id, $date_created, $date_modified, $ccode, $hcode);
		  				 $query = "INSERT INTO fee_tb (ENTRY_FEE, WITHDRAWAL_FEE, PRODUCT_ID, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?)";
                   		 $insert_payment = $this->user->InsertRecords($query, $params);
                   		 $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  			}
		   		 }
			 }else{
			 	$output = json_encode(array("status"=>"No data"));
			 }
		 //echo $output;
		}




    	function fetch_product_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_product_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$code = $row->CODE;
		  	$name = $row->NAME;
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$init_min = $row->INITIAL_MIN_AMOUNT;
		  	$init_max = $row->INITIAL_MAX_AMOUNT;
		  	$bal_min = $row->BALANCE_MIN;
		  	$bal_max = $row->BALANCE_MAX;
		  	$interest_rate = $row->INTEREST_RATE;
		  	$interest_period = $row->INTEREST_PERIOD;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$output = "";
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM product_tb where HCODE = '$hcode'","DATE_MODIFIED");
		    if($get_date_modified !== 0){
		       if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE product_tb SET NAME = '$name', CODE = $code, INITIAL_MIN_AMOUNT = '$init_min', INITIAL_MAX_AMOUNT = '$init_max', BALANCE_MIN = '$bal_min', 
			 	BALANCE_MAX = '$bal_max', INTEREST_RATE = '$interest_rate', INTEREST_PERIOD='$interest_period', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 	}else{
			 		 $output = json_encode(array("status"=>"No action"));
			 	}

		  	 }else{
		  		    	 $params = array($name, $code, $init_min, $init_max, $bal_min, $bal_max, $interest_rate, $interest_period, $date_created, $date_modified, $ccode, $hcode);
		  				 $query = "INSERT INTO product_tb (NAME, CODE, INITIAL_MIN_AMOUNT, INITIAL_MAX_AMOUNT, BALANCE_MIN, BALANCE_MAX, INTEREST_RATE, INTEREST_PERIOD, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
                   		 $insert_payment = $this->user->InsertRecords($query, $params);
                   		 $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  			}
		   		 }
			 }else{
			 	$output = json_encode(array("status"=>"No data"));
			 }
		 //echo $output;
		}





	   function fetch_admin_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_admin_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$code = $row->CODE;
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$username = $row->USERNAME;
		  	$password = $row->PASSWORD;
		  	$surname = $row->SURNAME;
		  	$othername = $row->OTHERNAME;
		  	$contact = $row->CONTACT;
		  	$user_role = $row->USER_ROLE;
		  	$status_id = $row->STATUS_ID;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$output = "";
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM admin_tb where HCODE = '$hcode'","DATE_MODIFIED");
		    if($get_date_modified !== 0){
		       if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE admin_tb SET CODE = $code, USERNAME = '$username', PASSWORD = '$password', SURNAME = '$surname', OTHERNAME = '$othername', CONTACT = '$contact', USER_ROLE='$user_role', STATUS_ID = $status_id, DATE_CREATED = '$date_created', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 	}else{
			 		 $output = json_encode(array("status"=>"No action"));
			 	}

		  	 }else{
		  		    	 $params = array($code, $username, $password, $surname, $othername, $contact, $user_role, $status_id, $date_created, $date_modified, $ccode, $hcode);
		  				 $query = "INSERT INTO admin_tb (CODE, USERNAME, PASSWORD, SURNAME, OTHERNAME, CONTACT, USER_ROLE, STATUS_ID, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
                   		 $insert_payment = $this->user->InsertRecords($query, $params);
                   		 $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  			}
		   		 }
			 }else{
			 	$output = json_encode(array("status"=>"No data"));
			 }
		 //echo $output;
		}



       function fetch_account_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_account_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$product_id = $row->PRODUCT_ID;
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$client_id = $row->CLIENT_ID;
		  	$account_number = $row->ACCOUNT_NO;
		  	$acc_status = $row->ACC_STATUS;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$output = "";
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM account_tb where HCODE = '$hcode'","DATE_MODIFIED");
		    if($get_date_modified !== 0){
		       if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE account_tb SET PRODUCT_ID = '$product_id', ACC_STATUS = $acc_status, CLIENT_ID = $client_id, DATE_MODIFIED = '$date_modified' where HCODE = '$hcode");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 	}else{
			 		 $output = json_encode(array("status"=>"No action"));
			 	}

		  	 }else{
		  		    	 $params = array($product_id, $client_id, $account_number, $acc_status, $date_created, $date_modified, $ccode, $hcode);
		  				 $query = "INSERT INTO account_tb (PRODUCT_ID, CLIENT_ID, ACCOUNT_NO, ACC_STATUS, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?)";
                   		 $insert_payment = $this->user->InsertRecords($query, $params);
                   		 $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  			}
		   		 }
			 }else{
			 	$output = json_encode(array("status"=>"No data"));
			 }
			// echo $output;
		}


	    function fetch_client_tb()
		{

		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_client_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$code = $row->CODE;
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$firstname = $row->FIRSTNAME;
		  	$lastname = $row->LASTNAME;
		  	$othername = $row->OTHERNAME;
		  	$dob = $row->DOB;
		  	$gender = $row->GENDER;
		  	$contact_1 = $row->CONTACT_1;
		  	$next_of_kin = $row->NEXT_OF_KIN;
		  	$next_of_kin_contact = $row->NEXT_OF_KIN_CONTACT;
		  	$region = $row->REGION;
		  	$city = $row->CITY;
		  	$area = $row->AREA;
		  	$occupation = $row->OCCUPATION;
		  	$identification = $row->IDENTIFICATION;
		  	$idnumber = $row->IDNUMBER;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
			$account_status = $row->ACCOUNT_STATUS;
		  	$image_path = $row->IMAGE_PATH;
		  	$post_by = $row->POST_BY;
		    	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM client_tb where HCODE = '$hcode'","DATE_MODIFIED");
		  	    if($get_date_modified !== 0){
		       	if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
		       	   $update = $this->user->updateFunction("UPDATE client_tb SET DOB = '$dob', GENDER = '$gender', CONTACT_1 = '$contact_1', NEXT_OF_KIN = '$next_of_kin', NEXT_OF_KIN_CONTACT = '$next_of_kin_contact', GENDER = '$gender', REGION = '$region', CITY = '$city', AREA = '$area', OCCUPATION = '$occupation', IDENTIFICATION = '$identification', IDNUMBER = '$idnumber',  DATE_MODIFIED = '$date_modified', ACCOUNT_STATUS = '$account_status', IMAGE_PATH = '$image_path', POST_BY = '$post_by' where HCODE = '$hcode'");
		       	   $output = json_encode(array("status"=>"Fetch update success"));
			       	}else{
			       		 $output = json_encode(array("status"=>"No action"));
			       	}
		  		}else{

		  		    $params = array($code, $firstname, $lastname, $othername, $dob, $gender, $contact_1, $next_of_kin, $next_of_kin_contact, $region, $city, $area, $occupation, $identification, $idnumber, $date_created, $date_modified, $account_status, $image_path, $post_by, $ccode, $hcode);
		  			$query = "INSERT INTO client_tb (CODE, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
                     $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}

			 }
		}else{
		    $output = json_encode(array("status"=>"No data from client server"));
		}
		//echo $output;	
	}


       function fetch_deposit_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_deposit_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$amount = $row->AMOUNT;
		  	$client_id = $row->CLIENT_ID;
		  	$account_number = $row->ACCOUNT_NUMBER;
		  	$date_created = $row->DATE_CREATED;
		  	$date_normal = $row->DATE_NORMAL;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$created_by = $row->CREATED_BY;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM deposit_tb where HCODE='$hcode'","DATE_MODIFIED");
		  	if($get_date_modified !== 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE deposit_tb SET AMOUNT = $amount, DATE_MODIFIED = '$date_modified', CREATED_BY = '$created_by', CCODE = $ccode where HCODE = '$hcode'");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 }else{
			 	$output = json_encode(array("status"=>"No action"));
			 }	
		  	}else{
		  		    $params = array($hcode, $amount, $client_id, $account_number, $date_created, $date_normal, $date_modified, $created_by, $ccode);
		  			$query = "INSERT INTO deposit_tb (HCODE, AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, DATE_CREATED, DATE_NORMAL, DATE_MODIFIED, CREATED_BY, CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
                     $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  			}
		  		}
			 }else{
			 	$output = json_encode(array("status"=>"No data"));
			 }
			// echo $output;
		}


		function fetch_balance_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$output="";
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_balance_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);

		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$hcode = $row->HCODE;
		  	$ccode = $row->CCODE;
		  	$product_id = $row->PRODUCT_ID;
		  	$client_id = $row->CLIENT_ID;
		  	$account_number = $row->ACCOUNT_NUMBER;
		  	$fees = $row->FEES;
		  	$deposits = $row->DEPOSITS;
		  	$interests = $row->INTERESTS;
		  	$withdrawals = $row->WITHDRAWALS;
		  	$balance = $row->BALANCE;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;

		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM balance_tb where HCODE = '$hcode'","DATE_MODIFIED");

		  	if($get_date_modified !== 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE balance_tb SET FEES = '$fees', DEPOSITS = '$deposits', INTERESTS = '$interests', WITHDRAWALS = '$withdrawals', BALANCE = '$balance', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode'");
			 	  $output = json_encode(array("status"=>"Fetch update success"));
			 		}else{
			 		$output = json_encode(array("status"=>"No action"));	
			 		}
		  		}else{
		  		    $params = array($product_id, $client_id, $account_number, $fees, $deposits, $interests, $withdrawals, $balance, $date_created, $date_modified, $ccode, $hcode);
		  			$query = "INSERT INTO balance_tb (PRODUCT_ID, CLIENT_ID, ACCOUNT_NUMBER, FEES, DEPOSITS, INTERESTS, WITHDRAWALS, BALANCE, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
                    $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}
			 }
		}
		//echo $output;
	}


	    function fetch_withdrawal_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_withdrawal_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$amount = $row->AMOUNT;
		  	$code = $row->CODE;
		  	$client_id = $row->CLIENT_ID;
		  	$hcode = $row->HCODE;
		  	$tag = $row->TAG;
		  	$ccode = $row->CCODE;
		  	$account_number = $row->ACCOUNT_NUMBER;
		  	$date_created = $row->DATE_CREATED;
		  	$date_normal = $row->DATE_NORMAL;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$created_by = $row->CREATED_BY;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM withdrawal_tb where HCODE = '$hcode' ","DATE_MODIFIED");
		  	if($get_date_modified !== 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){		 	
			 	$update = $this->user->updateFunction("UPDATE withdrawal_tb SET AMOUNT = $amount, DATE_MODIFIED = '$date_modified', CREATED_BY = '$created_by' where ID = $id");
			 	$output = json_encode(array("status"=>"Fetch update success"));
			 	}else{
			 	  $output = json_encode(array("status"=>"No action"));
			 	}	
		  	}else{
		  		    $params = array($code, $hcode, $amount, $client_id, $account_number, $date_created, $date_normal, $date_modified, $created_by, $tag, $ccode);
		  			$query = "INSERT INTO withdrawal_tb (CODE, HCODE, AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, DATE_CREATED, DATE_NORMAL, DATE_MODIFIED, CREATED_BY, TAG, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
                      $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}

			 }
		}
		//echo $output;
	}


	  function fetch_charge_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_charge_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$date_normal = $row->DATE_NORMAL;
		  	$amount = $row->AMOUNT;
		  	$client_id = $row->CLIENT_ID;
		  	$account_number = $row->ACCOUNT_NUMBER;
		  	$withdrawal_id = $row->WITHDRAWAL_ID;
		  	$fee_type = $row->FEE_TYPE;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM charge_tb where HCODE = '$hcode'","DATE_MODIFIED");
		  	if($get_date_modified !== 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE charge_tb SET AMOUNT = $amount, FEE_TYPE = '$fee_type', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode'");
			 		$output = json_encode(array("status"=>"Fetch update success"));
		  			}else{
                    $output = json_encode(array("status"=>"No action"));
		  			}
		  		}else{

		  		    $params = array($amount, $client_id, $account_number, $fee_type, $withdrawal_id, $date_created, $date_modified, $date_normal, $ccode, $hcode);
		  			$query = "INSERT INTO charge_tb (AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, FEE_TYPE, WITHDRAWAL_ID, DATE_CREATED, DATE_MODIFIED, DATE_NORMAL, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
                    $output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}

			 }
			
		}
		//echo $output;
	}


	  function fetch_activation_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_activation_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$next_date = $row->NEXT_DATE;
		  	$used_code = $row->USED_CODE;
		  	$date_created = $row->DATE_CREATED;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM activation_tb where HCODE = '$hcode'","DATE_MODIFIED");
		  	if($get_date_modified != 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE activation_tb SET NEXT_CODE = $next_code, USED_CODE = '$used_code', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode'");
			 		$output = json_encode(array("status"=>"Fetch update success"));
		  			}else{
                    $output = json_encode(array("status"=>"No action"));
		  			}
		  		}else{
		  		    $params = array($next_date, $used_code, $date_created, $date_modified, $ccode, $hcode);
		  			$query = "INSERT INTO activation_tb (NEXT_DATE, USED_CODE, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
               		$output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}
			 }
		}else{
			$output = json_encode(array("status"=>"No data"));
		}
      //echo $output;
	}



  
  	 function exec_delete_tb()
		{
		$db=$this->user_initing;
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_del?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if($result!=="none"){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$date_created = $row->DATE_CREATED;
		  	$dtable = $row->DTABLE;
		  	if($db->get_data_here_value("SELECT ID FROM delist_tb WHERE HCODE = '$hcode'","ID")>0){
		  	}else{
		  		$query = $db->deleRecord("DELETE FROM $dtable WHERE HCODE = '$hcode'");
		  	}
			 }
			 $query = $db->deleRecord("DELETE FROM delist_tb WHERE CCODE = $hostid");
			 $output = $query=="0"?json_encode(array("status"=>"Delist removed success")):json_encode(array("status"=>"Delist remove failed failed"));
		}else{
			$output = json_encode(array("status"=>"No data"));
		}
      
     //echo $html_curl;
	}


	  function fetch_subscription_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_subscription_tb?hostid='.$hostid;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$subscription = $row->SUBSCRIPTION;
		  	$days_left = $row->DAYS_LEFT;
		  	$date_modified = $row->DATE_MODIFIED;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_MODIFIED FROM subscription_tb where HCODE = '$hcode'","DATE_MODIFIED");
		  	if($get_date_modified != 0){
		  		if($this->user->date_convert($row->DATE_MODIFIED) > $this->user->date_convert($get_date_modified)){
			 	$update = $this->user->updateFunction("UPDATE subscription_tb SET SUBSCRIPTION = $subscription, DAYS_LEFT = '$days_left', DATE_MODIFIED = '$date_modified' where HCODE = '$hcode'");
			 		$output = json_encode(array("status"=>"Fetch update success"));
		  			}else{
                    $output = json_encode(array("status"=>"No action"));
		  			}
		  		}else{
		  		    $params = array($subscription, $days_left, $date_modified, $ccode, $hcode);
		  			$query = "INSERT INTO subscription_tb (SUBSCRIPTION, DAYS_LEFT, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
               		$output = $insert_payment>0?json_encode(array("status"=>"Insert successful")):json_encode(array("status"=>"Insert failed"));
		  		}
			 }
		}else{
			$output = json_encode(array("status"=>"No data"));
		}
      //echo $output;
	}


	  function fetch_check_tb()
		{
		$hostid = $_COOKIE['ccode'];
		$url = 'https://linksengineering.net/sync_lbook/public/api/server_check_tb?hostid='.$hostid.'&usercode='.$_SESSION["id"];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$html_curl = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($html_curl);
		if(isset($result)){
		  foreach($result as $row){
		  	$ccode = $row->CCODE;
		  	$hcode = $row->HCODE;
		  	$account_number = $row->ACCOUNT_NUMBER;
		  	$entry_fee_status = $row->ENTRY_FEE_STATUS;
		  	$date_created = $row->DATE_CREATED;
		  	$get_date_modified = $this->user->get_data_here_value("SELECT DATE_CREATED FROM check_tb where HCODE = '$hcode'","DATE_CREATED");
		  	if($get_date_modified == 0){
		  		    $params = array($account_number, $entry_fee_status, $date_created, $ccode, $hcode);
		  			$query = "INSERT INTO check_tb (ACCOUNT_NUMBER, ENTRY_FEE_STATUS, DATE_CREATED, CCODE, HCODE) VALUES (?,?,?,?,?)";
                    $insert_payment = $this->user->InsertRecords($query, $params);
               $output = $insert_payment>0?json_encode(array("status"=>"Done")):json_encode(array("status"=>"Insert failed"));
		  		}else{

		  		}
			 }
		}else{

		}
 
		    $last_date = date('jS F').", ".date('Y');
    		$currDate = date('Y-m-d H:i:s');
    		$last_time = date('h:i A', strtotime($currDate));
            $update = $this->user->updateFunction("UPDATE sync_history SET DATE_CREATED = '$currDate', LAST_DATE = '$last_date', LAST_TIME = '$last_time', SYNC_BY = ".$_SESSION['id']." where HOST_ID = ".$_COOKIE['ccode']."");
            	$output = json_encode(array("status"=>"Done", "date"=>$last_date, "time"=>$last_time));

      echo $output;
	}
}
?>



      
              