<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount;

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
        $this->post_loan();
	}

	function post_loan()
	   {
		extract($_POST);
		    $db = $this->user_initing;
		    $paydate = $db->cleanInput($paydate)." ".date("H:i");
		    $loanid = $db->cleanInput($loanid);
			$accno = $db->cleanInput($accno);
    		$amount = $db->cleanInput($amount);
		    $customerid=$db->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='$accno'","id");
    		$user = $_SESSION['id'];
    		if(isset($_SESSION['id'])){
    		   $params = array($customerid, $loanid, $amount, $user, $paydate, $paydate, $paydate, $_COOKIE['ccode'], $db->hcode());
        	   $query = "INSERT INTO loan_payment (CUSTOMERID, LOANID, AMOUNT, POSTED_BY, DATE_NORMAL, DATE_CREATED,DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?)";
               $insert_ = $db->InsertRecords($query, $params);	
               if($insert_>0){
               $lamount=$db->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ACCOUNT_NO='$accno'","AMOUNT");
               $interest=$db->get_data_here_value("SELECT INTEREST FROM loan_tb WHERE ACCOUNT_NO='$accno'","INTEREST");
			   $getpenalty=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
			   $allpayment=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
			   $total=$lamount+$interest;
			   $balance=$total+$getpenalty-$allpayment;
			   if($balance<=0){
			   	$update_= $db->updateFunction("UPDATE loan_tb SET REPAY_STATUS=0 WHERE ID=$loanid");
			   	if($update_==="0"){
			   	 echo json_encode(array("status"=>"success", "repay_status"=>"complete"));	
			   	}
			   }else{
			   	 echo json_encode(array("status"=>"success", "repay_status"=>"notcomplete"));	
			     }               	
               }else{
               	echo json_encode(array("status"=>"failed"));
               }
    	 }else{
    	 	echo json_encode(array("status"=>"expire"));
    	 }
	   }
    }
?>