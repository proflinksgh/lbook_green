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
			$accno = $db->cleanInput($accno);
			$crdate = $db->cleanInput($crdate)." ".date("H:i");
    		$product = $db->cleanInput($product);
    		$amount = $db->cleanInput($amount);
    		$maturity = $db->cleanInput($maturity);
    		$capacity = $db->cleanInput($capacity);
    		$formfee = $db->cleanInput($formfee);
    		$colat = $db->cleanInput($colat);
    		$user = $_SESSION['id'];
    		if(isset($_SESSION['id'])){
    		if($db->get_data_here_value("SELECT ID FROM loan_tb WHERE ACCOUNT_NO='$accno' AND REPAY_STATUS=1 AND CCODE=".$_COOKIE['ccode']." OR ACCOUNT_NO='$accno' AND STATUS=1 AND CCODE=".$_COOKIE['ccode']."","ID")>0){
    		 echo json_encode(array("status"=>"exist"));
    		}else{
    		   $interest=$db->get_data_here_value("SELECT INTEREST FROM loan_product_tb WHERE CODE=$product AND CCODE=".$_COOKIE['ccode']."","INTEREST");
    		   $interest=$interest*$amount;
    		   $interest=$interest*$maturity;
    		   $total=$interest+$amount;

    		   $params = array($db->codeIgnite("loan_tb"), $accno, $product, $amount, $interest, $total, 0, 0, $colat, $maturity, $capacity, $maturity*30, 1, 1, $crdate, "0", "0", $crdate, $user, $_COOKIE['ccode'], $db->hcode());
        	   $query = "INSERT INTO loan_tb (CODE, ACCOUNT_NO, LOAN_PRODUCT_CODE, AMOUNT, INTEREST, TOTAL, REPAYMENT, PENALTY, COLAT, LOAN_PERIOD, CAPACITY, DAYS_LEFT, STATUS, REPAY_STATUS, DATE_CREATED, DATE_APPROVE, DATE_MATURE, DATE_MODIFIED, POSTED_BY, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
               $insert_ = $db->InsertRecords($query, $params);	
               if($insert_>0){
               	$db->postformfee($formfee, $accno, $db->fetchcustomerid($accno), $crdate);
               	echo json_encode(array("status"=>"success"));
               }else{
               	echo json_encode(array("status"=>"failed"));
               }
    		} 
    	 }else{
    	 	echo json_encode(array("status"=>"expire"));
    	 }
	   }
    }
?>