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
        $this->calcMomo();
	}

	function calcMomo()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$loanid = $db->cleanInput($loanid);
		$accno = $db->cleanInput($accno);
		$maturity=$db->get_data_here_value("SELECT LOAN_PERIOD FROM loan_tb WHERE ID=$loanid","LOAN_PERIOD")*28;
		$lamount=$db->get_data_here_value("SELECT AMOUNT FROM loan_tb WHERE ID=$loanid","AMOUNT");
		$customerid=$db->get_data_here_value("SELECT id FROM loanreg_tb WHERE code='$accno'","id");
		$getpenalty=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM penalty_tb WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
		$interest=$db->get_data_here_value("SELECT INTEREST FROM loan_tb WHERE ID=$loanid","INTEREST");
		$weektype=$db->get_data_here_value("SELECT CAPACITY FROM loan_tb WHERE ID=$loanid","CAPACITY");
		$status=$db->get_data_here_value("SELECT STATUS FROM loan_tb WHERE ID=$loanid","STATUS");
		$date_approve=$db->get_data_here_value("SELECT DATE_APPROVE FROM loan_tb WHERE ID=$loanid","DATE_APPROVE");

		if($weektype==="1"){
		 $period=$maturity/7; 
		}else if($weektype==="2"){
		 $period=$maturity/14; 
		}
		$total=$lamount+$interest+$getpenalty;
		$stopay=($lamount+$interest)/$period;
		$allpayment=$db->get_data_here_value("SELECT SUM(AMOUNT) AS AMT FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid","AMT");
		
		$balremain=$total-$allpayment;
		if($status==="0"){
		 $lastpay=$db->get_data_here_value("SELECT DATE_CREATED FROM loan_payment WHERE LOANID=$loanid AND CUSTOMERID=$customerid ORDER BY ID DESC LIMIT 1","DATE_CREATED");
		 $dlast=explode(' ',$lastpay);
		 $lastpay=$dlast[0];
		 if($lastpay===0){
		  $days_bet=$db->days_diff($date_approve, date("Y-m-d"));
		  $calc=$db->calcPay($weektype, $stopay, $days_bet);
		  $calc=json_decode($calc);
		  if($calc->amount>$balremain){
		  	echo json_encode(array("amount"=>$balremain, "origamt1"=>$calc->amount));
		  }else{
		  	echo $this->check_against_balance($days_bet, $weektype, $stopay, $balremain, $calc->amount);
		  }
		 }else{
          $days_bet=$db->days_diff($lastpay, date("Y-m-d"));
          $calc=$db->calcPay($weektype, $stopay, $days_bet);
		  $calc=json_decode($calc);
          if($calc->amount>$balremain){
		  	echo json_encode(array("amount"=>$balremain, "origamt2"=>$calc->amount));
		  }else{
		  	echo $this->check_against_balance($days_bet, $weektype, $stopay, $balremain, $calc->amount);
		  }
		 }
		}else if($status==="3"){
		 if($allpayment!==$total){
            echo json_encode(array("amount"=>$total-$allpayment, "origamt3"=>"In third"));
		   }
		 }
	   }

	   function check_against_balance($days_bet, $weektype, $stopay, $balremain, $calcamt){
	   	$db = $this->user_initing;
	   	$calc=$db->calcPay($weektype, $stopay, 7);
	   	$calc=json_decode($calc);
        $rem=$balremain-$calcamt;
        if($rem<$calc->amount){
          return json_encode(array("amount"=>$balremain));
        }else{
         return $db->calcPay($weektype, $stopay, $days_bet);	
        }
	   }
    }
?>