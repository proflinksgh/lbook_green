<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $form;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
		public function index()
	{
        $this->post_register();
	}

	function post_register()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$admin_id = $db->cleanInput($admin_id);
    	$date = $db->cleanInput($date);
    	$product = $db->cleanInput($product);
    	$subscription = $db->cleanInput($subscription);
    	$client_id = $db->cleanInput($client_id);
    	$code = $db->get_data_here_value("SELECT CODE FROM client_tb WHERE ID = $client_id","CODE");
    	$description = $db->cleanInput($description);
    	$currDate = date('Y-m-d');
    	$hcode = random_int(1000000, 9999999);
              $hcode =$db->password("1".$hcode.strlen($product));
              $idDate = $currDate." ".date("h:i:sa");
              $currDate = date('Y-m-d H:i:s');
    		
    		$check = false;

    		$result = $db->getAllData("SELECT NEXT_ACCOUNT, FORMATION from account_number_tb WHERE CCODE = ".$_COOKIE['ccode']."");
    		if($result!==0){
    		foreach($result as $row)
            {
               $this->id = $row['NEXT_ACCOUNT'];
               $this->form = $row['FORMATION'];
            }
		}
            
            $id = $this->id;
            
            if($result){
                if(strlen($this->id) == 1){
                  $acc_no = $this->form." "."000000000".$this->id;
                  $check = true;
                }else if(strlen($this->id) == 2){
                       $acc_no = $this->form." "."00000000".$this->id;  
                        $check = true;
                }else if(strlen($this->id) == 3){
                      $acc_no = $this->form." "."0000000".$this->id; 
                        $check = true;
                }else if(strlen($this->id) == 4){
                       $acc_no = $this->form." "."000000".$this->id;
                        $check = true;
                }else if(strlen($this->id) == 5){
                       $acc_no = $this->form." "."00000".$this->id;
                        $check = true;
                }else if(strlen($this->id) == 6){
                       $acc_no = $this->form." "."0000".$this->id;
                        $check = true;
                }else if(strlen($this->id) == 7){
                       $acc_no = $this->form." "."000".$this->id;
                        $check = true;
                }else if(strlen($this->id) == 8){
                       $acc_no = $this->form." "."00".$this->id;
                        $check = true;
                }else if(strlen($this->id) == 9){
                       $acc_no = $this->form." "."0".$this->id;
                        $check = true;
                }else{
                     $acc_no = $this->form." ".$this->id; 
                      $check = true;
                }
            }
            
            
            if($check == true){
            
		    $params = array($product,$code, $acc_no, $subscription, '0', '1', $description, $date, $date, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO account_tb (PRODUCT_ID, CLIENT_ID, ACCOUNT_NO, SUBSCRIPTION, ACC_STATUS, SMS_STATUS, DESCRIPTION, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
		   	
		   	if($insert_contribution>0){
		   	$this->fee = $db->get_data_here_value("SELECT ENTRY_FEE from fee_tb WHERE PRODUCT_ID = $product AND CCODE=".$_COOKIE["ccode"]."","ENTRY_FEE");
		   	}
		   	
		       $hcode =$db->password("1".$code.strlen($acc_no));
		   	$params = array($db->hcode(), $code, $acc_no, 'ENTRY FEE',  $this->fee, $idDate, $currDate, $currDate, $_COOKIE['ccode']);
			$query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_MODIFIED, DATE_NORMAL, CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
		       $insert_contribution = $db->InsertRecords($query, $params);
		   	
			$params = array($acc_no, '0', $_COOKIE['ccode'], $db->hcode());
		   	$query = "INSERT INTO check_tb (ACCOUNT_NUMBER, ENTRY_FEE_STATUS, CCODE, HCODE) VALUES (?,?,?,?)";
		   	$insert_contribution = $db->InsertRecords($query, $params);   	
		   	
    		if($insert_contribution>0){
    		$query = $db->updateFunction("UPDATE client_tb SET ACCOUNT_STATUS = 1 where ID = $client_id AND CCODE = ".$_COOKIE['ccode']."");
    
    		if($query == "0"){
    		$params = array($code, $product, $acc_no, '0', '0', '0', '0', $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
    		$query = "INSERT INTO balance_tb (CLIENT_ID, PRODUCT_ID, ACCOUNT_NUMBER, FEES, DEPOSITS, WITHDRAWALS, BALANCE, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
		   	
		   	if($insert_contribution>0){
		   	$newid=$this->id;
		   	$newid = $newid + 1;
		  
    		$query = $db->updateFunction("UPDATE account_number_tb SET NEXT_ACCOUNT = $newid WHERE CCODE=".$_COOKIE["ccode"]."");
        		if($query=="0"){
        		 echo json_encode(array("status"=>"success", "accno"=>$acc_no, "sms_status"=>$db->welcome_send_sms($db->get_data_here_value("SELECT CONTACT_1 FROM client_tb WHERE ID = $client_id AND CCODE=".$_COOKIE["ccode"]."","CONTACT_1"))));      
        		}else{
        		   echo json_encode(array("status"=>"failed"));  
                    	    	}
		   	     }
            		 }
    		   }
	      }else{
	            echo json_encode(array("status"=>"failed"));  
	      }
	    }
	   }
    ?>