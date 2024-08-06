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
		$currDate = date('Y-m-d H:i');
		$currPeriod = date('d');
		$year = date('Y');
		$month = $this->user->get_full_month(date('M'));
		
		$lastDay = date("Y-m-t");
		$lastDay = substr($lastDay, 8);
		
// 		$currDate = "2024-01-31 23:00";
// 		$currPeriod = '31'; 
// 		$lastDay='31';
// 		$month = "January";
		
		if(($currPeriod == '30' && $lastDay=='30') ||($currPeriod == '31' && $lastDay=='31') ||($currPeriod =='28'&&$month=='February')){
		$employee = $this->user->getAllData("SELECT * FROM admin_tb WHERE ID!=2");
 		foreach($employee as $row){
 		       $this->id = $row['ID'];  
 		       $this->role = $row['USER_ROLE'];  
               $code=$db->get_data_here_value("SELECT CODE FROM admin_tb WHERE ID=".$row['ID']."","CODE");
 		    if($this->role == '5' || $this->role == '6'){
 		      $deposit = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSIT FROM deposit_tb where CREATED_BY = $code AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'", "DEPOSIT");  
 		      if(isset($deposit)&&$deposit>0){
 		        $deposit_comm = $deposit * 0.01;  
 		      }else{
 		        $deposit=0;
 		        $deposit_comm=0;
 		      }
 		      
 		      $registration = $this->user->get_data_here_value("SELECT COUNT(ID) as CLIENT FROM client_tb where POST_BY = $code AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'", "CLIENT");
 		      if(isset($registration)&&$registration>0){
 		        $register_comm = $registration * 0.5;  
 		      }else{
 		        $registration=0;
 		        $register_comm=0;
 		      }
 		      
 		      
 		      if($this->user->get_data_here_value("SELECT ID FROM employee_commission_tb WHERE STAFF_ID = $this->id AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'","ID")==0){
 		         $params = array($this->id, $month, $year, $registration, $register_comm, $deposit, $deposit_comm, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
                 $query = "INSERT INTO employee_commission_tb (STAFF_ID, MONTH, YEAR, NO_OF_REGIST, REG_COMMISSION, TOTAL_DEPOSIT, DEPOSIT_COMM, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                 $insert_commission = $this->user->InsertRecords($query, $params);
 		      }
 		   
 		   
 		    }else if($this->role == '7'){
 		          
 		      $momo_data = $this->user->getAllData("SELECT SUM(DEPOSIT_COMM) AS depcomm, SUM(CASHOUT_COMM) AS cashoutcomm FROM momo_trans_tb WHERE  POSTED_BY = $this->id AND monthname(DATE_CREATED) = '$month' AND year(DATE_CREATED) = '$year'"); 
 		      foreach($momo_data as $row){
 		          $this->depcomm = isset($row['depcomm'])?$row['depcomm']:0;
 		          $this->cashoutcomm = isset($row['cashoutcomm'])?$row['cashoutcomm']:0;
 		      }
 		      
 		      if($this->user->get_data_here_value("SELECT SUM(DEPOSIT_COMM) as COMMISSION FROM momo_comm_tb where STAFF_ID = $this->id AND MONTH = '$month' AND YEAR = '$year'", "COMMISSION")==0){
 		         $params = array($this->id, $month, $year, $this->depcomm, $this->cashoutcomm, $currDate);
                 $query = "INSERT INTO momo_comm_tb (STAFF_ID, MONTH, YEAR, DEPOSIT_COMM, CASHOUT_COMM, DATE_CREATED) VALUES (?,?,?,?,?,?)";
                 $insert_commission = $this->user->InsertRecords($query, $params);
 		            
 		                           }
 		                      }
 		                 }
 		        //Update deduction distribution 
 		        	$fetch_deduct = $this->user->getAllData("SELECT * FROM employee_deduction_tb");
 		            if($fetch_deduct!=0){
 		            foreach($fetch_deduct as $row){
 		                if($row['DISTRIBUTION'] != '0' || $row['DISTRIBUTION'] != 'all'){
 		                      $newdist = $row['DISTRIBUTION'] - 1;
 		                      $update_deduction = $this->user->updateFunction("UPDATE employee_deduction_tb SET DISTRIBUTION = '$newdist' where STAFF_ID = '".$row['STAFF_ID']."'");
 		                    }else{
 		                      $delete_dist=$this->user->delRecord("DELETE FROM employee_deduction_tb where STAFF_ID = '".$row['STAFF_ID']."'");
 		                    }
 		                }
 		            }
 		                echo "Calc complete";
	            	}else{
	            	   echo "Not active"; 
	            	}
 	            }
            }
    ?>