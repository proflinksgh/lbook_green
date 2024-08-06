<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $date, $user, $amount, $deposit, $withdrawal, $name, $role, $fees;

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
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		$user = $db->cleanInput($user);
		$uid = $user;
		$msg = array();
		
  		$userid = $db->get_data_here_value("SELECT ID FROM admin_tb WHERE CODE=$user","ID");
	    $result = $this->user->getAllData("SELECT SURNAME, OTHERNAME, rt.ID as role_id, ROLE from admin_tb adt JOIN role_tb rt ON adt.USER_ROLE = rt.ID WHERE adt.CODE = $uid AND adt.CCODE=".$_COOKIE["ccode"]."");  
		if($result!=0){
		foreach($result as $row)
        {
            $this->name = $row['SURNAME']." ".$row['OTHERNAME'];
            $this->role = $row['ROLE'];
            $this->role_id = $row['role_id'];
          }
		}else{
		  $this->name="N/A";
		  $this->role = "N/A";
		}
		
		if($db->withdrawal_role($this->role_id) == "0"||$this->role_id=="1"){
		  $wperm="yes";
		}else{
		  $wperm="no";
		}

	        if($date==""&&$date2==""){
	            
	        $this->deposit = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
	        $this->deposit1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	        //$deposit_comm = $db->get_data_here_value("SELECT SUM(DEPOSIT_COMM) AS amount FROM employee_commission_tb WHERE STAFF_ID=$userid","amount");
	          //$deposit_comm=$this->deposit1*0.01;
	        $deposit_comm=$db->get_data_here_value("SELECT SUM(COMMISSION) AS AMT FROM susucomm_tb where POSTED_BY=$user","AMT");
	           
	        }else if($date2 == '0'){
	            
	           $this->deposit = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND date(DATE_NORMAL) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
	           $this->deposit1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND date(DATE_NORMAL) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	           //$deposit_comm = $db->get_data_here_value("SELECT SUM(DEPOSIT_COMM) AS amount FROM employee_commission_tb WHERE STAFF_ID=$userid AND date(DATE_CREATED) ='$date'","amount");
	            //$deposit_comm=$this->deposit1*0.01;
	            $deposit_comm=$db->get_data_here_value("SELECT SUM(COMMISSION) AS AMT FROM susucomm_tb where POSTED_BY=$user AND date(DATE_CREATED) ='$date'","AMT");
	           
	        }else{
	            $this->deposit = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND date(DATE_NORMAL)  >= '$date' AND date(DATE_NORMAL) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
                $this->deposit1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from deposit_tb where CREATED_BY='$user' AND date(DATE_NORMAL)  >= '$date' AND date(DATE_NORMAL) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
                //$deposit_comm = $db->get_data_here_value("SELECT SUM(DEPOSIT_COMM) AS amount FROM employee_commission_tb WHERE STAFF_ID=$userid AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","amount");
	            //$deposit_comm=$this->deposit1*0.01;
	            $deposit_comm=$db->get_data_here_value("SELECT SUM(COMMISSION) AS AMT FROM susucomm_tb where POSTED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'","AMT");
	            
	        }
	    
    
        
        if($date==""&&$date2==""){
            
            $this->fees = number_format($this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND adt.CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
             $this->fees1 = $this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND adt.CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
            
	    }else if($date2 == '0'){
	        
	         $this->fees = number_format($this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND date(ct.DATE_CREATED) ='$date' AND ct.CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
	         $this->fees1 = $this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND date(ct.DATE_CREATED) ='$date' AND ct.CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	    }else{
	        
	         $this->fees = number_format($this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND date(ct.DATE_CREATED) BETWEEN '$date' AND '$date2' AND date(wt.DATE_CREATED) BETWEEN '$date' AND '$date2' AND wt.CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
	         $this->fees1 = $this->user->get_data_here_value("SELECT SUM(ct.AMOUNT) as AMOUNT from charge_tb ct JOIN withdrawal_tb wt ON ct.ACCOUNT_NUMBER=wt.ACCOUNT_NUMBER where CREATED_BY='$user' AND date(ct.DATE_CREATED) BETWEEN '$date' AND '$date2' AND date(wt.DATE_CREATED) BETWEEN '$date' AND '$date2' AND wt.CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	        
	    }
		

    
       if($date==""&&$date2==""){
           
             $this->withdrawal = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY=$user AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
             $this->withdrawal1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY='$user' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
 
	    }else if($date2 == '0'){
	        
	        $this->withdrawal = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY=$user AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
            $this->withdrawal1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY='$user' AND date(DATE_CREATED) ='$date' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	    
	    }else{
	         $this->withdrawal = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY=$user AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT"));
	         $this->withdrawal1 = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from withdrawal_tb where CREATED_BY='$user' AND date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CCODE=".$_COOKIE["ccode"]."", "AMOUNT");
	    }
	              
			$msg[] = array("withrole"=>$db->withdrawal_role($this->role_id), "wperm"=>$wperm, "userid"=>$userid, "dep_comm"=>isset($deposit_comm)?$deposit_comm:0, "deposit" => isset($this->deposit)?$this->deposit:0, "withdrawal" => isset($this->withdrawal)?$this->withdrawal:0, "fees" => isset($this->fees)?$this->fees:0, "deposit1" => isset($this->deposit1)?$this->deposit1:0, "withdrawal1" => isset($this->withdrawal1)?$this->withdrawal1:0, "fees1" => isset($this->fees1)?$this->fees1:0, "name" => $this->name, "role" => $this->role);
		    echo json_encode($msg);
	}
}
?>