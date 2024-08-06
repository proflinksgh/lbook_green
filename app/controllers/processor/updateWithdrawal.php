<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $idDate;
	private $idDeposit;

    	function __construct()
    	{
    	    $this->user_tag = $this->model('master_class');
    
    		$this->user_initing = $this->model('extend_function');
    
    		$this->date_composer = $this->user_initing->timer;
    
    		$this->conn = new master_class();
    	}

    
        public function index()
    	{
    		$this->update();
    	}


	  function update()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$idDate = $db->cleanInput($idDate);
		$id = $db->cleanInput($id);
		$accountno = $db->cleanInput($accountno);
		$amount = $db->cleanInput($amount);
		$currDate = date('Y-m-d H:i:s');
		    	
	    if($db->get_data_here_value("SELECT ID from charge_tb where WITHDRAWAL_ID = $id AND CCODE = ".$_COOKIE["ccode"]."","ID")>0){
	      $update_ = $db->updateFunction("UPDATE withdrawal_tb SET DATE_CREATED = '$idDate', DATE_NORMAL='$idDate', AMOUNT = '$amount', DATE_MODIFIED = '$currDate' where CODE = $id AND CCODE = ".$_COOKIE["ccode"]."");
    	  if($update_=="0"){
    	  $name = $db->get_data_here_value("SELECT NAME from product_tb pt JOIN account_tb atb ON pt.ID = atb.PRODUCT_ID WHERE ACCOUNT_NO = '$accountno' AND atb.CCODE = ".$_COOKIE["ccode"]."","NAME");    		
    	  if($name == 'SUSU ACCOUNT'){
    		    
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
    	    
    	      $this->fee = $db->get_data_here_value("SELECT WITHDRAWAL_FEE from fee_tb ft JOIN account_tb atb ON ft.PRODUCT_ID = atb.PRODUCT_ID WHERE ACCOUNT_NO = '$accountno' AND atb.CCODE = ".$_COOKIE["ccode"]."","WITHDRAWAL_FEE");
    	    }
    		
           $update_ = $db->updateFunction("UPDATE charge_tb SET AMOUNT = '$this->fee', DATE_MODIFIED = '$currDate' where WITHDRAWAL_ID = $id AND CCODE = ".$_COOKIE["ccode"]."");  
                 
    		if($update_ == "0"){
    			echo json_encode(array('status'=>'success', 'message'=>'Transaction updated successfully'));
    		}else{
    		   	echo json_encode(array('status'=>'success', 'message'=>'Transaction updated successfully'));
    		}
    	  }else{
    	    echo json_encode(array('status'=>'failed', 'message'=>'Failed to update record! Please try again'));  
    	  }
	     }else{
	           echo json_encode(array('status'=>'failed', 'message'=>'Failed to update record! Please try again'));
	        }    
		}
	}
?>