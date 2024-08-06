<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount, $cashoutcomm, $depcomm, $role;

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
        $this->commission();
	}

	function commission()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$user = $db->cleanInput($user);
		$currDate = date('Y-m-d H:i:s');
		$currPeriod = date('d');
		$year = date('Y');
		$month = $this->user->get_full_month(date('M'));
		
 		    $role=$db->get_data_here_value("SELECT USER_ROLE FROM admin_tb WHERE CODE=$user","USER_ROLE");
 		    $userid=$db->get_data_here_value("SELECT ID FROM admin_tb WHERE CODE=$user","ID");
 		    
 		    if($role == '5' || $role == '6'){
 		      $deposit = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSIT FROM deposit_tb where CREATED_BY = $user AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'", "DEPOSIT");  
 		      if(isset($deposit)&&$deposit>0){
 		        $deposit_comm = $deposit * 0.01;  
 		      }else{
 		        $deposit=0;
 		        $deposit_comm=0;
 		      }
 		      
 		      $registration = $this->user->get_data_here_value("SELECT COUNT(ID) as CLIENT FROM client_tb where POST_BY = $user AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'", "CLIENT");
 		       if(isset($registration)&&$registration>0){
 		        $register_comm = $registration * 0.5;  
 		      }else{
 		        $registration=0;
 		        $register_comm=0;
 		      }
 		      
 		      if($this->user->get_data_here_value("SELECT ID FROM employee_commission_tb WHERE STAFF_ID = $userid AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'","ID")==0){
 		         $params = array($userid, $month, $year, $registration, $register_comm, $deposit, $deposit_comm, $currDate, $_COOKIE['ccode'], $db->hcode());
                 $query = "INSERT INTO employee_commission_tb (STAFF_ID, MONTH, YEAR, NO_OF_REGIST, REG_COMMISSION, TOTAL_DEPOSIT, DEPOSIT_COMM, DATE_CREATED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?)";
                 $insert_commission = $this->user->InsertRecords($query, $params);
 		      }else{
 		         $update_ = $db->updateFunction("UPDATE employee_commission_tb SET NO_OF_REGIST = $registration, REG_COMMISSION = $register_comm, TOTAL_DEPOSIT = $deposit, DEPOSIT_COMM = $deposit_comm, DATE_MODIFIED = '$currDate' WHERE STAFF_ID = $userid AND MONTH='$month' AND YEAR='$year'");
 		         if($update_=="0"){
 		             echo json_encode("Update EmpComm success $deposit_comm");
 		         } 
 		      }
 		    }else if($role == '7'){
 		      $momo_data = $this->user->getAllData("SELECT SUM(DEPOSIT_COMM) AS depcomm, SUM(CASHOUT_COMM) AS cashoutcomm FROM momo_trans_tb WHERE  POSTED_BY = '$userid' AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'"); 
 		      if($momo_data!=0){
 		      foreach($momo_data as $row){
 		          $this->depcomm = isset($row['depcomm'])?$row['depcomm']:0;
 		          $this->cashoutcomm = isset($row['cashoutcomm'])?$row['cashoutcomm']:0;
 		        }
 		      }
 		      
 		        if($this->user->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as COMMISSION FROM momo_comm_tb where STAFF_ID = $userid AND MONTH = '$month' AND YEAR = '$year'", "COMMISSION")==0){
 		         $params = array($userid, $month, $year, $this->depcomm, $this->cashoutcomm, $currDate);
                 $query = "INSERT INTO momo_comm_tb (STAFF_ID, MONTH, YEAR, DEPOSIT_COMM, CASHOUT_COMM, DATE_CREATED) VALUES (?,?,?,?,?,?)";
                 $insert_commission = $this->user->InsertRecords($query, $params);
 		             }else{
 		              $update_ = $db->updateFunction("UPDATE momo_comm_tb SET DEPOSIT_COMM = $this->depcomm, CASHOUT_COMM = $this->cashoutcomm WHERE STAFF_ID = $userid AND MONTH='$month' AND YEAR='$year'");
         		       if($update_=="0"){
         		             echo json_encode("Update EmpComm success $deposit_comm");
         		       }   
 		             }
 		           }
 	            }
            }
    ?>