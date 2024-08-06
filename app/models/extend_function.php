<?php


class extend_function extends master_class
{

	function __construct()
	{
	parent::__construct();
	}


	function date_normal(){
	 return date('jS F').", ".date('Y')." ".date("h:i:sa");
	}

	function date_created(){
	 return date('Y-m-d H:i');
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

	 function codeIgnite($table){
     $code=$this->get_data_here_value("SELECT code FROM $table ORDER BY id DESC LIMIT 1","code");
     if($code>0){
     	return $code+1;
     }else{
     	return 1000;
     }
    }

    function lncodeIgnite($table, $category){
     $year=date("Y");
     $code=$this->get_data_here_value("SELECT id FROM $table ORDER BY id DESC LIMIT 1","id");
     if($code===0){
      if($category==="1"){
     	return "GRE/BUS/$year/000001";	
      }else{
      	return "GRE/GRP/$year/000001";	
      }
     }else{
       $code+=1;
       if($category==="1"){
     	return "GRE/BUS/$year/00000$code";	
      }else{
      	return "GRE/GRP/$year/00000$code";	
      }
     }
    }
    
    
   
    function getbalance($loanid, $customerid){
      $lamount=$this->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ID=$loanid","AMOUNT");
      $interest=$this->get_data_here_value("SELECT INTEREST FROM loan_tb WHERE ID=$loanid","INTEREST");
	  $getpenalty=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
	  $allpayment=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
	  $total=$lamount+$interest;
	  $balance=$total+$getpenalty-$allpayment;
	  return $balance;
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


	 function posted_by($code){
	 	return $this->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=$code AND CCODE = ".$_COOKIE['ccode']."","NAME");
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

    function loan_approve_mess($amount){
     return "Dear valued customer, your requested loan amounting to GHS".$amount." has been approved by GREATER'S GREEN STAR LIMITED. Thank you.";    
    }

    function loan_decline_mess(){
     return "Dear valued Customer, we are sorry to inform you that your loan application has been declined by GREATER'S GREEN STAR LIMITED. Thank you.";    
    }

   function loan_payment_mess($amount){
     return "Dear valued customer, your loan repayment of GHS".$amount." has been received by GREATER'S GREEN STAR LIMITED. Thank you."; 
   }

   function checkMonthly(){

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
	
	
	
	
	function checkOutDeduction(){
    $weekend = date('N'); 
    if ($weekend !== '6' && $weekend !== '7') {
        $users = $this->getAllData("SELECT * FROM user");
        if ($users !== 0) {
            foreach ($users as $row) {
                $userID = $row['user_id'];      
                $day=date("d")-1;
                $day=$day<=9?"0$day":$day;
                $month=date("m");
                $year=date("Y");
                $date1=$year."-".$month."-".$day." 18:00"; 
                $date2=$year."-".$month."-".$day." 23:59";
                $datecr=$year."-".$month."-".$day;
                $cdate1=$year."-".$month."-".$day." 04:00"; 
                $cdate2=$year."-".$month."-".$day." 17:59"; 
                if($this->get_data_here_value("SELECT uid FROM attendance WHERE id = $userID AND date_cr>=$date1 AND date_cr<=$date2", "uid")===0){
                  if($this->get_data_here_value("SELECT uid FROM attendance WHERE date_cr>=$cdate1 AND date_cr<=$cdate2 AND id=$userID","uid")>0){
                    if($this->get_data_here_value("SELECT ID FROM calc_comm WHERE TARGET = $userID AND DATE_CREATED=$date2", "ID")===0){
                      if($userID !== "5" &&  $userID !== "7" &&  $userID !== "8"){
                        $params = array($date2, 'No Checkout', -5, $userID);
                        $query = "INSERT INTO calc_comm (DATE_CREATED, TIME_CREATED, AMOUNT, `TARGET`) VALUES (?,?,?,?)";
                        $this->InsertRecords($query, $params);
                      }
                    }
                  }
                }
            }
            return json_encode(array("status" => "success"));
        } else {
            return json_encode(array("message" => "There are no users to process"));
        }
    } else {
        return json_encode(array("message" => "It's the weekend, no deduction"));
    }
}
	
	
	function days_diff($start, $end){
	      $start = strtotime($start);
          $end = strtotime($end);
          $days_between = ($end - $start) / 86400;
          
          return $days_between;
	}
	
	
    	function routeLbook($fullname, $password, $phone, $whatsapp, $company, $type, $email, $employee){
    	      $fullname= rawurlencode($fullname);   
    	      $password= rawurlencode($password);   
    	      $phone= rawurlencode($phone);   
    	      $whatsapp= rawurlencode($whatsapp);   
    	      $company= rawurlencode($company);   
    	      $type= rawurlencode($type);   
    	      $email= rawurlencode($email);   
    	      $employee= rawurlencode($employee);   
               $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://linksengineering.net/apilinks/public/api/initLBook?fullname='.$fullname.'&password='.$password.'&phone='.$phone.'&whatsapp='.$whatsapp.'&company='.$company.'&type='.$type.'&email='.$email.'&employee='.$employee.'&source=1',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'GET',
                  CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=8r40aictqipfebae41vad736js'
                  ),
                ));
               $response = curl_exec($curl);
     }
     
     
     
     	    function visitLbook(){
    	      $company= rawurlencode($this->company());   
    	      $email= rawurlencode($this->company_email());   
               $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://linksengineering.net/apilinks/public/api/visitLbook?company='.$company.'&email='.$email.'',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'GET',
                  CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=8r40aictqipfebae41vad736js'
                  ),
                ));
               $response = curl_exec($curl);
               $data=json_decode($response);
               return $data;
          }


	function calcPay($weektype, $stopay, $days_bet){
			if($days_bet>=7&&$days_bet<14){
		 	 return json_encode(array("amount"=>$stopay));	
		 	}else if($days_bet>=14&&$days_bet<21){
		 	 return json_encode(array("amount"=>$stopay*2));	
		 	}else if($days_bet>=21&&$days_bet<28){
		 	 return json_encode(array("amount"=>$stopay*3));	
		 	}else if($days_bet>=35&&$days_bet<42){
		 	 return json_encode(array("amount"=>$stopay*4));	
		 	}else if($days_bet>=49&&$days_bet<56){
		 	 return json_encode(array("amount"=>$stopay*5));	
		 	}else if($days_bet>=63&&$days_bet<70){
		 	 return json_encode(array("amount"=>$stopay*6));	
		 	}else if($days_bet>=77&&$days_bet<84){
		 	 return json_encode(array("amount"=>$stopay*7));	
		 	}else{
		     return json_encode(array("amount"=>$stopay));
		 	}

		  if($weektype==="2"){
		  if($days_bet>=14&&$days_bet<21){
		 	 return json_encode(array("amount"=>$stopay));	
		 	}else if($days_bet>=35&&$days_bet<49){
		 	 return json_encode(array("amount"=>$stopay*2));	
		 	}else if($days_bet>=63&&$days_bet<77){
		 	 return json_encode(array("amount"=>$stopay*3));	
		 	}else if($days_bet>=91&&$days_bet<105){
		 	 return json_encode(array("amount"=>$stopay*4));	
		 	}else{
		 	 return json_encode(array("amount"=>$stopay));		
		 	}
		 }
	}


	  function updateValidation($ccode){
	  $active_date = $this->get_data_here_value("SELECT NEXT_DATE FROM activation_tb WHERE CCODE=$ccode","NEXT_DATE");
      $currDate = date('Y-m-d');
      $subscribe = $this->get_data_here_value("SELECT SUBSCRIPTION from subscription_tb WHERE CCODE=$ccode","SUBSCRIPTION");
      $days_left = $subscribe - $this->days_diff($active_date, $currDate);
      $days_left = $days_left < 0?0:$days_left;
      $update_=$this->updateFunction("UPDATE subscription_tb SET DAYS_LEFT = $days_left, DATE_MODIFIED='$currDate' WHERE CCODE=$ccode");
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
		 
		 
		 	function loan_sms($loanid, $amount, $mtype){   
		 	$accno=$this->get_data_here_value("SELECT ACCOUNT_NO FROM loan_tb WHERE ID=$loanid","ACCOUNT_NO");
		 	$numbers=$this->get_data_here_value("SELECT phone FROM loanreg_tb WHERE code='$accno'","phone");
    	    $public_key = $this->api_key();
    	if($mtype==="approve"){
    		$msg = $this->loan_approve_mess($amount);
    	}else if($mtype==="decline"){
        $msg = $this->loan_decline_mess($amount);
    	}else if($mtype==="payment"){
        $msg = $this->loan_payment_mess($amount);
    	}
   
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
		 }


			function calculateBalance($accountno)
	        {
	        $currDate = date('Y-m-d H:i:s');
	        $deposits = $this->get_data_here_value("SELECT SUM(AMOUNT) as deposit from deposit_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","deposit");
	        $fee = $this->get_data_here_value("SELECT SUM(AMOUNT) as fee from charge_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","fee");
	         $interest = $this->get_data_here_value("SELECT SUM(AMOUNT) as interest from interest_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","interest");
	         $withdrawal = $this->get_data_here_value("SELECT SUM(AMOUNT) as withdrawal from withdrawal_tb WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."","withdrawal");
	         $withdrawal=is_numeric($withdrawal)?$withdrawal:0;
	         $interest=is_numeric($interest)?$interest:0;
	         $fee=is_numeric($fee)?$fee:0;
	         $deposits=is_numeric($deposits)?$deposits:0;
	        $balance = ($interest + $deposits) -  ($withdrawal + $fee);
	        $update = $this->updateFunction("UPDATE balance_tb SET FEES = $fee, DEPOSITS = $deposits, WITHDRAWALS = $withdrawal, INTERESTS = $interest, BALANCE = $balance, DATE_MODIFIED='$currDate' WHERE ACCOUNT_NUMBER = '$accountno' AND CCODE = ".$_COOKIE['ccode']."");
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


  	function validateLoan()
		{
		$currDate = date('Y-m-d H:i:s');
		$count=0;
		$currDate=$this->date_created();
		$ccode = $_COOKIE["ccode"];
		$result = $this->getAllData("SELECT * FROM loan_tb WHERE STATUS = 0 AND REPAY_STATUS=1");
		if($result !== 0){
		foreach($result as $row)
        {
        $days=$this->days_diff(date("Y-m-d"), $row["DATE_MATURE"]);
        if($days<=0){
        $result = $this->updateFunction("UPDATE loan_tb SET STATUS = 3, DATE_MODIFIED = '$currDate' WHERE ID = ".$row["ID"]."");	
        }

        if($row["DAYS_LEFT"]!=="0"){
          $days_remain=$this->days_diff($row["DATE_APPROVE"], $row["DATE_MATURE"]);
          $result = $this->updateFunction("UPDATE loan_tb SET DAYS_LEFT = '$days_remain', DATE_MODIFIED = '$currDate' WHERE ID = ".$row["ID"]."");	
        }

        $code=$row["CODE"];
        $accno=$row["ACCOUNT_NO"];
        $lamount=$this->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ACCOUNT_NO='$accno' AND CODE=$code","AMOUNT");
		$interest=$this->get_data_here_value("SELECT INTEREST FROM loan_tb WHERE ACCOUNT_NO='$accno' AND CODE=$code","INTEREST");
		$loanid=$this->get_data_here_value("SELECT ID FROM loan_tb WHERE ACCOUNT_NO='$accno' AND CODE=$code","ID");
		$customerid=$this->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='$accno'","id");
		$penalty=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
		$penalty=isset($penalty)?$penalty:0;
		$total=$lamount+$interest+$penalty;
		$user=$_SESSION["id"];
		$allpayment=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
		$balremain=$total-$allpayment;
		if($balremain<=0){
		$result = $this->updateFunction("UPDATE loan_tb SET REPAY_STATUS = 0, DATE_MODIFIED = '$currDate' WHERE ID=".$row["ID"]."");
		  }
         }
         return 1;
		}
    }


       function calcPenalty()
		{
		$currDate=$this->date_created();
		$count=0;
		$ccode = $_COOKIE["ccode"];
		$result = $this->getAllData("SELECT * FROM loan_tb WHERE STATUS = 3 AND REPAY_STATUS=1");
		if($result !== 0){
		foreach($result as $row)
        {
        $accno=$row["ACCOUNT_NO"];
        $lamount=$this->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ACCOUNT_NO='$accno'","AMOUNT");
		$loanid=$this->get_data_here_value("SELECT ID FROM loan_tb WHERE ACCOUNT_NO='$accno'","ID");
		$customerid=$this->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='$accno'","id");
		$interest=$this->get_data_here_value("SELECT INTEREST FROM loan_tb WHERE ACCOUNT_NO='$accno'","INTEREST");
		$maturity_date=$this->get_data_here_value("SELECT DATE_MATURE FROM loan_tb WHERE ACCOUNT_NO='$accno'","DATE_MATURE");
		$total=$lamount+$interest;
		$user=$_SESSION["id"];
		$allpayment=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
		$penaltyrate=$this->get_data_here_value("SELECT PENALTY FROM loan_product_tb WHERE CODE=".$row["LOAN_PRODUCT_CODE"]." ","PENALTY");
		$penaltycal=$this->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE CUSTOMERID=$customerid AND LOANID=$loanid","AMT");
		$balremain=($total+$penaltycal)-$allpayment;
		if($balremain>0){
		$lastpenaltydate=$this->get_data_here_value("SELECT DATE_CREATED FROM penalty_tb WHERE CUSTOMERID=$customerid AND LOANID=$loanid ORDER BY ID DESC LIMIT 1","DATE_CREATED");

		if($lastpenaltydate!==0){
        $days=$this->days_diff($lastpenaltydate,date("Y-m-d"));
         if($days>=28){
           $params = array($customerid, $loanid, $balremain, $penaltyrate, $balremain*$penaltyrate, $user, $this->date_normal(), $this->date_created(), $this->date_created(), $_COOKIE['ccode'], $this->hcode());
        	   $query = "INSERT INTO penalty_tb (CUSTOMERID, LOANID, BALANCE, PRATE, AMOUNT, POSTED_BY, DATE_NORMAL, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $insert_ = $this->InsertRecords($query, $params);
          }
		 }else{
		 $days=$this->days_diff($maturity_date,date("Y-m-d"));

         if($days>=28){
           $params = array($customerid, $loanid, $balremain, $penaltyrate, $balremain*$penaltyrate, $user, $this->date_normal(), $this->date_created(), $this->date_created(), $_COOKIE['ccode'], $this->hcode());
        	   $query = "INSERT INTO penalty_tb (CUSTOMERID, LOANID, BALANCE, PRATE, AMOUNT, POSTED_BY, DATE_NORMAL, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $insert_ = $this->InsertRecords($query, $params);
          }
		 }
		}
        }

         return 1;
		}else{
		return 1;
		}
       }


    function fetchcustomerid($loanid){
     return $this->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='$loanid'","id");
    }


    function postformfee($amount, $loanid, $customerid, $crdate)
		{
	
         $params = array($loanid, $customerid, $amount, $_SESSION["id"], $crdate, $crdate, $crdate, $_COOKIE['ccode'], $this->hcode());
         $query = "INSERT INTO formfee_tb (loanid, customerid, amount, posted_by, date_normal, date_created, date_modified, ccode, hcode) VALUES (?,?,?,?,?,?,?,?,?)";
         $insert_ = $this->InsertRecords($query, $params);
    }


    function checkAmtGive($accno){
     $countno=$this->get_data_here_value("SELECT COUNT(ID) AS NOM FROM loan_tb WHERE ACCOUNT_NO='$accno' AND REPAY_STATUS=0","NOM");
     if($countno==="0"){
     	return 2000;
     }else{
     for($i=1;$i<=$countno;$i++){
      if($i===1){
       return 4000;
      }else{
       return $i*2000;
       }
      }
     }
    }

		 
}