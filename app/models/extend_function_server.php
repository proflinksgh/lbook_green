<?php


class extend_function_server extends master_class_server
{

	function __construct()
	{
	parent::__construct();
	}



	function checkInternet(){
	$connected =  @fsockopen("www.google.com", 80); 
	 if($connected){
	 	return "connect";
	 }else{
	 	return "notconnect";
	 }
	}

	 function hcode(){
	  $code = random_int(1000000, 9999999);
      $hcode =$this->password($_COOKIE['ccode'].$code.strlen($code));
      return $hcode;
	 }

	  function gencode(){
	  return random_int(100000, 999999);
	 }

	   function last_sync_date(){
	   return $this->get_data_here_value("SELECT LAST_DATE FROM sync_history WHERE HOST_ID = ".$_COOKIE['ccode']."","LAST_DATE");
	 }

	  function last_sync_time(){
	   return $this->get_data_here_value("SELECT LAST_TIME FROM sync_history WHERE HOST_ID = ".$_COOKIE['ccode']."","LAST_TIME");
	 }

	  function account_string(){
	   return $this->get_data_here_value("SELECT FORMATION FROM account_number_tb WHERE CCODE = ".$_COOKIE['ccode']."","FORMATION");
	 }

	 function account_count(){
	   return $this->get_data_here_value("SELECT NEXT_ACCOUNT FROM account_number_tb WHERE CCODE = ".$_COOKIE['ccode']."","NEXT_ACCOUNT");
	 }

	 function company(){
	   return $this->get_data_here_value("SELECT COMPANY FROM company_tb WHERE UNIQ = ".$_COOKIE['ccode']."","COMPANY");
	 }

	 function company_phone(){
	   return $this->get_data_here_value("SELECT PHONE FROM company_tb WHERE UNIQ = ".$_COOKIE['ccode']."","PHONE");
	 }

	 function company_business(){
	   return $this->get_data_here_value("SELECT BUSINESS FROM company_tb WHERE UNIQ = ".$_COOKIE['ccode']."","BUSINESS");
	 }


	  function company_email(){
	   return $this->get_data_here_value("SELECT EMAIL FROM company_tb WHERE UNIQ = ".$_COOKIE['ccode']."","EMAIL");
	 }

	 function welcome_sms(){
	   return $this->get_data_here_value("SELECT WELCOME_SMS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","WELCOME_SMS");
	 }

	 function deposit_sms(){
	 	return $this->get_data_here_value("SELECT DEPOSIT_SMS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","DEPOSIT_SMS");
	 }
 
	 function withdrawal_sms(){
	   return $this->get_data_here_value("SELECT WITHDRAWAL_SMS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","WITHDRAWAL_SMS");
	 }

	 function transfer_sms(){
	 	return $this->get_data_here_value("SELECT TRANSFER_SMS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","TRANSFER_SMS");
	 }

	 function welcome_mess(){
	 	return $this->get_data_here_value("SELECT WELCOME_MESS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","WELCOME_MESS");
	 }

	 function deposit_mess(){
	 	return $this->get_data_here_value("SELECT DEPOSIT_MESS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","DEPOSIT_MESS");
	 }

	 function withdrawal_mess(){
	 	return $this->get_data_here_value("SELECT WITHDRAWAL_MESS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","WITHDRAWAL_MESS");
	 }

	 function transfer_mess(){
	 	return $this->get_data_here_value("SELECT TRANSFER_MESS FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","TRANSFER_MESS");
	 }

	 function api_key(){
	 	return $this->get_data_here_value("SELECT APIKEY FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","APIKEY");
	 }

	 function sid(){
	 	return $this->get_data_here_value("SELECT SID FROM sms_settings WHERE CCODE = ".$_COOKIE['ccode']."","SID");	
	 }


	 function register_role($role){
	 	return $this->get_data_here_value("SELECT REGISTER FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","REGISTER");
	 }

	 function deposit_role($role){
	 	return $this->get_data_here_value("SELECT DEPOSIT FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","DEPOSIT");
	 }

	 function withdrawal_role($role){
	 	return $this->get_data_here_value("SELECT WITHDRAWAL FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","WITHDRAWAL");
	 }

	 function transfer_role($role){
	 	return $this->get_data_here_value("SELECT TRANSFER FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","TRANSFER");
	 }

	 function history_role($role){
	 	return $this->get_data_here_value("SELECT HISTORY FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","HISTORY");
	 }

	 function loan_role($role){
	 	return $this->get_data_here_value("SELECT LOAN FROM role_settings WHERE ROLE = $role AND CCODE = ".$_COOKIE['ccode']."","LOAN");
	 }


	function formatWelcomeSMS($mess){
     $mess = str_replace("{company}",$this->company(),$mess);
     return $mess;
	}

	function formatTransSMS($mess, $amount, $newbalance){
     $mess = str_replace("{company}",$this->company(),$mess);
     $mess = str_replace("{amount}",$amount,$mess);
     $mess = str_replace("{newbalance}",$newbalance,$mess);
     return $mess;
	}

	function formatTransferSMS($mess, $amount, $newbalance, $account_number){
     $mess = str_replace("{company}",$this->company(),$mess);
     $mess = str_replace("{amount}",$amount,$mess);
     $mess = str_replace("{newbalance}",$newbalance,$mess);  
     $mess = str_replace("{account_number}",$account_number,$mess);
     return $mess;
	}


	function escaping_var($data)
	{
	    return htmlspecialchars($data, ENT_QUOTES);
	}

	function cleanInput($string)
	{
		return str_replace("'","&#39;",$string);
	}
	
	function dontcleanInput($string)
	{
		return $string;
	}
	
	
	function InsertRecords($com,$params)
	{
		$query = $this->aps_insert($com,$params);
		return $this->link->lastInsertId();
	}


	function date_convert($start){
	  $output = strtotime($start);
     return $output;
	}



	/*INSERT DATA INTO DATABASE*/
	function Insert($query,$params,$status)
	{
		if($status===true)
		{
			//returns last insert id after data has been added to the db

			$query = $this->aps_insert($query,$params);
			return $this->link->lastInsertId();
		}
		else
		{
			return $query = $this->aps_insert($query,$params);
		}
		
	}
	
	
	function strContact($contact){
	  $contact = str_replace(' ', '', $contact);  
	  $nom = substr($contact, 0,-9);
        if($nom === "0"){
         $nom = substr($contact, 1, 9);
         return "233$nom";
        }else if($nom === ""){
         return "233$contact";
        }else if($nom === "+233"){
         $nom = substr($contact, 1, 12);
         return "233$contact";
        }else{
          return $contact;  
        }
	}

	//use mainly when data is secured
	function securedInsert($query)
	{
		$query = $this->link->query($query);
		return $query->rowCount();
	}



	/*UPDATE  ROWS IN DATABASE*/
	function updRecord($query,$params)
	{
		return $this->aps_insert($query,$params);
	}


	/*DELETE ROWS IN DATABASE*/
	function delRecord($query,$params)
	{
		return $this->aps_insert($query,$params);
	}

    

    function deleRecord($query)
	{
		$query = $this->link->prepare($query);
			$query->execute();
		    if($query)
			{
				
				return "0";
			}
			else
			{
				return "1";

			}
	}



	/*GET ALL DATA FROM DATABASE*/
	function getAllData($query)
	{
		$query = $this->link->prepare($query);
			
			$query->execute();
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				return $query->fetchAll();
			}
			else
			{
				return 0;
			}
	}


	function delete_record($query)
	{
		$query = $this->link->prepare($query);
			
			$query->execute();
			if($query)
			{
				return 0;
			}
			else
			{
				return 1;
			}
	}



	function get_data_here_counter($query)
	{
		$query = $this->link->prepare($query);
			
			$query->execute();
			return $rowcount = $query->rowCount();
			
	}
	
	
	function get_full_month($month)
	{
		if($month == 'Jan'){
		    return 'January';
		}else if($month == 'Feb'){
		    return 'February';
		}else if($month == 'Mar'){
		    return 'March';
		}else if($month == 'Apr'){
		    return 'April';
		}else if($month == 'May'){
		    return 'May';
		}else if($month == 'Jun'){
		    return 'June';
		}else if($month == 'Jul'){
		    return 'July';
		}else if($month == 'Aug'){
		    return 'August';
		}else if($month == 'Sep'){
		    return 'September';
		}else if($month == 'Oct'){
		    return 'October';
		}else if($month == 'Nov'){
		    return 'November';
		}else if($month == 'Dec'){
		    return 'December';
		}
			
	}



	function get_data_here_value($query,$column)
	{
		$query = $this->link->prepare($query);
			
			$query->execute();
			$rowcount = $query->rowCount();
			if($rowcount>0)
			{
				$rest = $query->fetch();
				return $rest[$column];
			}
			else
			{
				return 0;

			}
	}
	
	
	
		function updateFunction($query)
	{
		$query = $this->link->prepare($query);
			$query->execute();
		    if($query)
			{
				
				return "0";
			}
			else
			{
				return "1";

			}
	}
	
	
	function days_diff($start, $end){
	      $start = strtotime($start);
          $end = strtotime($end);
          $days_between = ceil(abs($end - $start) / 86400);
          
          return $days_between;
	}


		function updateValidation($ccode){
			$active_date = $this->get_data_here_value("SELECT NEXT_DATE FROM activation_tb WHERE CCODE=$ccode","NEXT_DATE");
      $currDate = date('Y-m-d');
      $subscribe = $this->get_data_here_value("SELECT SUBSCRIPTION from subscription_tb WHERE CCODE=$ccode","SUBSCRIPTION");
      $days_left = $subscribe - $this->days_diff($active_date, $currDate);
      $days_left = $days_left < 0?0:$days_left;
      $update_=$this->updateFunction("UPDATE subscription_tb SET DAYS_LEFT = $days_left WHERE CCODE=$ccode");
      if($update_=="0"){
         return true;
        }  
        return true;     
			}


			function days_left($ccode){
			$active_date = $this->get_data_here_value("SELECT NEXT_DATE FROM activation_tb WHERE CCODE=$ccode","NEXT_DATE");
      $currDate = date('Y-m-d');
      $subscribe = $this->get_data_here_value("SELECT SUBSCRIPTION from subscription_tb WHERE CCODE=$ccode","SUBSCRIPTION");
      $days_left = $subscribe - $this->days_diff($active_date, $currDate);
      $days_left = $days_left < 0?0:$days_left;
      return $days_left;    
			}


    function isExpire($ccode)
		{
    	$days_left = $this->get_data_here_value("SELECT DAYS_LEFT FROM subscription_tb WHERE CCODE = $ccode","DAYS_LEFT");
    	if($days_left<=0){
    		return true;
	        }else{
	        	return false;
	      }         
		}



	function password($pass){
	 return sha1("*#`".$pass."%20@*");
	}


	function deposit_send_sms($acc_no, $numbers, $amount, $newbalance){
    		if($this->deposit_sms() == "0"){
    		if($this->get_data_here_value("SELECT SMS_STATUS FROM account_tb WHERE ACCOUNT_NO = '$acc_no' AND CCODE = ".$_COOKIE['ccode']."","SMS_STATUS")=="0"){
    	    $public_key = $this->api_key();
    		$msg = $this->formatTransSMS($this->deposit_mess(), $amount, $newbalance);
			$message= rawurlencode($msg);                   
			$numbers= rawurlencode($numbers);                   
			$sender= rawurlencode($this->sid());                    
			    $url = "https://linksengineering.net/apisms/api/qapi?public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;
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
			    return $result;
			 }else{
			 	return json_encode("SMS Disabled for Customer");
			 }
			}else{
				return json_encode("SMS Disabled");
			}
		 }


		function withdrawal_send_sms($acc_no, $numbers, $amount, $newbalance){
    	    if($this->withdrawal_sms() == "0"){
    	    if($this->get_data_here_value("SELECT SMS_STATUS FROM account_tb WHERE ACCOUNT_NO = '$acc_no' AND CCODE = ".$_COOKIE['ccode']."","SMS_STATUS")=="0"){
    	    $public_key = $this->api_key();
    		$msg = $this->formatTransSMS($this->withdrawal_mess(), $amount, $newbalance);
			$message= rawurlencode($msg);                   
			$numbers= rawurlencode($numbers);                   
			$sender= rawurlencode($this->sid());                    
			    $url = "https://linksengineering.net/apisms/api/qapi?public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;
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
			    return $result;
			 }else{
			 	return json_encode("SMS Disabled for Customer");
			 }
			}else{
				return json_encode("SMS Disabled");
			}
	 }



			function welcome_send_sms($numbers){
    		if($this->welcome_sms()=="0"){
    		$public_key = $this->api_key();
    		$msg = $this->formatWelcomeSMS($this->welcome_mess());
			$message= rawurlencode($msg);                   
			$numbers= rawurlencode($numbers);                   
			$sender= rawurlencode($this->sid());                   
			    $url = "https://linksengineering.net/apisms/api/qapi?public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;
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
			    return $result;
			}else{
				return json_encode("Welcome SMS Disabled");
			}
		}

			function transfer_send_sms($numbers, $amount, $newbalance, $account_number){
    	    if($this->transfer_sms() == "0"){
    	    $public_key = $this->api_key;
    		$msg = $this->formatTransferSMS($this->transfer_mess(), $amount, $newbalance, $account_number);
			$message= rawurlencode($msg);                   
			$numbers= rawurlencode($numbers);                   
			$sender= rawurlencode($this->sid());                    
			    $url = "https://linksengineering.net/apisms/api/qapi?public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;
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
			    return $result;
			}else{
				return json_encode("Transfer SMS Disabled");
			}
		 }


			function calculateBalance($accountno)
	        {
	        $currDate = date('Y-m-d H:i:s');
	        $deposits = $this->get_data_here_value("SELECT SUM(AMOUNT) as deposit from deposit_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","deposit");
	        $fee = $this->get_data_here_value("SELECT SUM(AMOUNT) as fee from charge_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","fee");
	         $interest = $this->get_data_here_value("SELECT SUM(AMOUNT) as interest from interest_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","interest");
	         $withdrawal = $this->get_data_here_value("SELECT SUM(AMOUNT) as withdrawal from withdrawal_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","withdrawal");
	        $balance = ($interest + $deposits) -  ($withdrawal + $fee);
	        $update = $this->updateFunction("UPDATE balance_tb SET FEES = '$fee', DEPOSITS = '$deposits', WITHDRAWALS = '$withdrawal', INTERESTS = '$interest', BALANCE = '$balance', DATE_MODIFIED='$currDate' where ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."");
	        return $balance;
	       }


	    function calculateAllBalance()
		{
		$currDate = date('Y-m-d H:i:s');
		$count=0;
		$ccode = $_COOKIE["ccode"];
		$result = $this->getAllData("SELECT ACCOUNT_NO from account_tb WHERE CCODE = $ccode");
		if($result !== 0){
		foreach($result as $row)
        {
          $search = $row['ACCOUNT_NO'];
          $deposits = $this->get_data_here_value("SELECT SUM(AMOUNT) AS deposit FROM deposit_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","deposit");
         $fee = $this->get_data_here_value("SELECT SUM(AMOUNT) AS charge FROM charge_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","charge");
        $interest = $this->get_data_here_value("SELECT SUM(AMOUNT) AS interest FROM interest_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","interest");
        $interest = round($interest,2);
        $withdrawal = $this->get_data_here_value("SELECT SUM(AMOUNT) AS withdrawal FROM withdrawal_tb WHERE ACCOUNT_NUMBER = '$search' AND CCODE = $ccode","withdrawal");
        $balance = ($interest + $deposits) -  ($withdrawal + $fee);
         $update = $this->updateFunction("UPDATE balance_tb SET FEES = '$fee', DEPOSITS = '$deposits', INTERESTS = '$interest', WITHDRAWALS = '$withdrawal', BALANCE = '$balance', DATE_MODIFIED='$currDate' where ACCOUNT_NUMBER = '$search' AND CCODE = $ccode");
    	$deposits = 0;
    	$interest = 0;
    	$withdrawal = 0;
    	$fee = 0;
    	$balance = 0;
        }
		}
  }


  	function lsync_post($data, $url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("data"=>$data)));
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
          "Content-Type: application/json",
          "Accept: application/json"
     ]);
		$html_curl = curl_exec($ch);
		curl_close($ch);

		$data=json_decode($html_curl);
		return $data;
	}


			function activate($code){
			$code= rawurlencode($code);                                            
			    $url = "https://linksengineering.net/apilinks/public/api/activate?code=".$code;
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
			    return json_decode($html_curl);
		}


		function checkpost(){
		$company = $this->company();                  
		$url = "https://linksengineering.net/apilinks/public/api/check_record_exist?company=".$company;
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
		$data = json_decode($html_curl, TRUE);
		if(isset($data)){
		if($data==0){
			$this->postdata();
		 		}
			}
		}


  function postdata(){
  	$customer = $this->get_data_here_value("SELECT COUNT(ID) AS CUSTOMER FROM client_tb WHERE CCODE=".$_COOKIE["ccode"]."","CUSTOMER");
		$deposit=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM deposit_tb WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");
		$withdrawal=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMOUNT FROM withdrawal_tb WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");
		$balance=$this->get_data_here_value("SELECT SUM(BALANCE) AS AMOUNT FROM balance_tb WHERE CCODE=".$_COOKIE["ccode"]."","AMOUNT");
		$activated=$this->get_data_here_value("SELECT NEXT_DATE FROM activation_tb WHERE CCODE=".$_COOKIE["ccode"]."", "NEXT_DATE");
		$days_left=$this->get_data_here_value("SELECT DAYS_LEFT FROM subscription_tb WHERE CCODE=".$_COOKIE["ccode"]."", "DAYS_LEFT");
		
    $company = $this->company();    
    $customer = rawurlencode($customer);                   
		$deposit = rawurlencode($deposit);
		$balance = rawurlencode($balance);                     

		$url = "https://linksengineering.net/apilinks/public/api/post_offline_record?company=".$company."&customer=".$customer."&deposit=".$deposit."&withdrawal=".$withdrawal."&balance=".$balance."&activated=".$activated."&days_left=".$days_left;

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
		$data = json_decode($html_curl, TRUE);
  }
}

