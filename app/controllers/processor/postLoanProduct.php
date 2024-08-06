<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
		public function index()
	{
        $this->product();
	}

	function product()
	   {
		    extract($_POST);
		    $db = $this->user_initing;
    		$loanName = $db->cleanInput($loanName);
    		$loanCode = $db->cleanInput($loanCode);
    		$loanMinAmnt = $db->cleanInput($loanMinAmnt);
    		$loanMaxnAmnt = $db->cleanInput($loanMaxnAmnt);
    		$loanFormFee = $db->cleanInput($loanFormFee);
    		$loanProcessFee = $db->cleanInput($loanProcessFee);
    		$loanInterest = $db->cleanInput($loanInterest);
    		$loanPenalty = $db->cleanInput($loanPenalty);
    		$ccode = $_COOKIE['ccode'];
    		$currDate=date("Y-m-d H:i");
           if($db->get_data_here_value("SELECT ID FROM loan_product_tb WHERE NAME='$loanName' AND CCODE=$ccode","ID")===0){
			$params = array($loanName, $db->codeIgnite("loan_product_tb"), $loanMinAmnt, $loanMaxnAmnt, $loanFormFee, $loanProcessFee, $loanInterest, $loanPenalty, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO loan_product_tb (NAME, CODE, MIN_AMOUNT, MAX_AMOUNT, FORM_FEE, PROCESSING_FEE, INTEREST, PENALTY, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
    		if($insert_contribution>0){
    		   	   echo json_encode(array("status"=>"success"));
    		   	}else{
    		   	    echo json_encode(array("status"=>"failed"));
    		   	   } 
    	       }else{
    	       	echo json_encode(array("status"=>"exist", "message"=>"Loan Product already exist"));
    	       }   
    	    }  
    	}
    		
?>