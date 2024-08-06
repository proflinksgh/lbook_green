<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $date, $days, $deposits, $subscription, $withdrawals, $dob, $gender, $contact1, $contact2, $interest, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $account_number;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$search = $db->cleanInput($search);
		$msg = array();
		$result = $db->getAllData("SELECT ct.ID, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, ACCOUNT_NO, NAME, FEES, DEPOSITS, SUBSCRIPTION, INTERESTS, WITHDRAWALS, BALANCE, SMS_STATUS, ACC_STATUS, atb.DATE_CREATED from client_tb ct JOIN account_tb atb ON ct.ID = atb.CLIENT_ID JOIN product_tb pt ON pt.ID = atb.PRODUCT_ID JOIN balance_tb bt ON bt.CLIENT_ID=ct.ID where atb.ACCOUNT_NO = '$search' AND CCODE ".$_COOKIE["ccode"]."");

		if($result !== 0){
		foreach($result as $row)
        {
             if($row['ACC_STATUS']== '0'){
                 $this->acc_status = 'Active';
            }else{
               $this->acc_status = 'Inactive'; 
            }
            $this->id = $row['ID'];
            $this->fname = $row['FIRSTNAME'];
        	$this->lname = $row["LASTNAME"];
        	$this->othername = $row["OTHERNAME"];
        	$this->dob = $row['DOB'];
        	$this->gender = $row['GENDER'];
        	$this->contact = $row['CONTACT_1'];
			$this->account_number = $row['ACCOUNT_NO'];
 			$this->product_name = $row['NAME'];
 			$this->subscription = $row['SUBSCRIPTION'];
 			if($this->subscription == ''||$this->subscription == null||$this->subscription == "null"){
 			    $this->subscription = "N/A";
 			}else if($this->subscription == '30'){
 			    $this->subscription = '1 Month';
 			}else if($this->subscription == '90'){
 			    $this->subscription = '3 Months';
 			}else if($this->subscription == '180'){
 			    $this->subscription = '6 Months';
 			}else if($this->subscription == '270'){
 			    $this->subscription = '9 Months';
 			}else if($this->subscription == '360'){
 			    $this->subscription = '1 year';
 			}else if($this->subscription == '720'){
 			    $this->subscription = '2 years';
 			}else if($this->subscription == '1080'){
 			    $this->subscription = '3 years';
 			}
 			$this->fees = number_format($row['FEES']).".00";
 			$this->deposits = number_format($row['DEPOSITS']).".00";
 			$this->interest = number_format($row['INTERESTS']).".00";
 			$this->withdrawals = number_format($row['WITHDRAWALS']).".00";
			$this->balance = number_format($row['BALANCE']).".00";
			
			
			$currDate = date('Y-m-d H:i:s');
		    $start = strtotime($row['DATE_CREATED']);
            $end = strtotime($currDate);
            $this->days = ceil(abs($end - $start) / 86400);
        
			$msg[] = array("id" => $this->id, "name" => $this->fname." ".$this->lname." ".$this->othername, "dob" => $this->dob, "product_name" => $this->product_name, "subscription" => $this->subscription, "account_number" => $this->account_number, "fees"=>$this->fees, "interest"=>$this->interest, "deposits"=>$this->deposits, "withdrawals"=>$this->withdrawals, "balance"=>$this->balance, "days"=>$this->days, "sms"=>$row['SMS_STATUS'], "acc_status"=>$this->acc_status);
        }
        echo json_encode($msg);
    }else{
    	echo json_encode("0");
        // echo $search;
    }
		
	}
}
?>