<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $fee;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
		public function index()
	{
        $this->post_withdrawal();
	}

	function post_withdrawal()
	   {
		extract($_POST);
		   if(isset($_SESSION["id"])){
		    $db = $this->user_initing;
    		$id = $db->cleanInput($id);
    		$id = $db->get_data_here_value("SELECT CODE FROM client_tb WHERE ID = $id","CODE");
    		$amount = $db->cleanInput($amount);
    		$account = $db->cleanInput($account);
    		$userId = $_SESSION["id"];
            $currDate = date('Y-m-d H:i:s');
            $idDate = $db->cleanInput($idDate);
            $dateNormal = $idDate;
            $idDate = $idDate." ".date("h:i:sa");
            $code = random_int(1000000, 9999999);
            $hcode =$db->password("1".$code.strlen($amount));
            if(isset($_POST['image'])){
             $custimage=$_POST['image'];
            }else{
             $custimage="none";
            }
    		
    		$prod_name = $db->get_data_here_value("SELECT NAME from product_tb pt JOIN account_tb atb ON pt.ID = atb.PRODUCT_ID WHERE ACCOUNT_NO = '$account' AND atb.CCODE = ".$_COOKIE["ccode"]."","NAME");
    		
    		if($prod_name == 'SUSU ACCOUNT'){
    		    
    		    if((1 <= $amount) && ($amount <= 50)){
    		         $this->fee = '2';
    		    }else if( (51 <= $amount) && ($amount <= 100)){
    		         $this->fee = '3';
    		    }else if( (101<= $amount) && ($amount <= 200)){
    		         $this->fee = '5';
    		    }else if( (201<= $amount) && ($amount <= 300)){
    		         $this->fee = '10';
    		    }else if( (301<= $amount) && ($amount <= 400)){
    		         $this->fee = '12';
    		    }else if( (401<= $amount) && ($amount <= 500)){
    		         $this->fee = '15';
    		    }else if( (501<= $amount) && ($amount <= 600)){
    		         $this->fee = '18';
    		    }else if( (601<= $amount) && ($amount <= 700)){
    		         $this->fee = '20';
    		    }else if( (701<= $amount) && ($amount <= 800)){
    		         $this->fee = 25;
    		    }else if( (801<= $amount) && ($amount <= 900)){
    		         $this->fee = 30;
    		    }else if((901<= $amount) && ($amount <= 1000)){
    		         $this->fee = 35;
    		    }else if((1001<= $amount) && ($amount <= 1100)){
    		         $this->fee = 40;
    		    }else if((1101<= $amount) && ($amount <= 1500)){
    		         $this->fee = 45;
    		    }else if($amount > 1500){
    		         $this->fee = 50;
    		    }
    		    
    		}else{
    		    
    		     $withdrawal_fee = $db->get_data_here_value("SELECT WITHDRAWAL_FEE from fee_tb ft JOIN account_tb atb ON ft.PRODUCT_ID = atb.PRODUCT_ID WHERE ACCOUNT_NO = '$account' AND atb.CCODE = ".$_COOKIE["ccode"]."","WITHDRAWAL_FEE");    		    
    		}
    		
    		 $code = $db->gencode();
       		 $params = array ($code, $db->hcode(), $amount, $id, $account, $idDate, $custimage, $dateNormal, $userId,2, $_COOKIE['ccode']);
             $query = "INSERT INTO withdrawal_tb (CODE, HCODE, AMOUNT, CLIENT_ID, ACCOUNT_NUMBER, DATE_CREATED, PHOTO, DATE_NORMAL, CREATED_BY, TAG, CCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			 $withdrawal_id = $db->InsertRecords($query, $params);		   	
       		 unset($_SESSION["custimage"]); 
             if($this->fee > 0){
             	    $hcode =$db->password("1".$code.strlen($this->fee));
				 	$params = array($hcode, $id, $account, $code, 'WITHDRAWAL FEE',  $this->fee, $idDate , $dateNormal, $_COOKIE['ccode']);
        		   	$query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_NORMAL, CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
					$insert_contribution = $db->InsertRecords($query, $params);

					echo json_encode(array("status"=>"success", "message"=>"Withdrawal is successful", "sms_status"=>$db->withdrawal_send_sms($account, $db->get_data_here_value("SELECT CONTACT_1 FROM client_tb WHERE CODE = $id AND CCODE = ".$_COOKIE["ccode"]."","CONTACT_1"), $amount, $db->calculateBalance($account))));

             }else{
             	    $hcode =$db->password("1".$code.strlen("0"));
					$params = array($hcode, $id, $account, $withdrawal_id, 'WITHDRAWAL FEE', '0', $idDate, $dateNormal, $_COOKIE['ccode']);
                 	$query = "INSERT INTO charge_tb (HCODE, CLIENT_ID, ACCOUNT_NUMBER, WITHDRAWAL_ID, FEE_TYPE, AMOUNT, DATE_CREATED, DATE_NORMAL, CCODE) VALUES (?,?,?,?,?,?,?,?,?)";
                 	$insert_contribution = $db->InsertRecords($query, $params);
 
                    echo json_encode(array("status"=>"success", "message"=>"Withdrawal is successful", "sms_status"=>$db->withdrawal_send_sms($account, $db->get_data_here_value("SELECT CONTACT_1 FROM client_tb WHERE CODE = $id AND CCODE = ".$_COOKIE["ccode"]."","CONTACT_1"), $amount, $db->calculateBalance($account))));
             }
		  }else{
		           echo json_encode(array("status"=>"expired"));
		  }
	   }
	}
?>