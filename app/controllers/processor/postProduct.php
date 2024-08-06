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
        $this->post_register();
	}

	function post_register()
	   {
		    extract($_POST);
		    $db = $this->user_initing;
		    
    		$idProductName = $db->cleanInput($idProductName);
    		$idProductCode = $db->cleanInput($idProductCode);
    		$idMinAmount = $db->cleanInput($idMinAmount);
    		$idMaxAmount = $db->cleanInput($idMaxAmount);
    		$idBalMin = $db->cleanInput($idBalMin);
    		$idBalMax = $db->cleanInput($idBalMax);
    		$idInterestRate = $db->cleanInput($idInterestRate);
    		$idPeriod = $db->cleanInput($idPeriod);
    		$idEntryFee = $db->cleanInput($idEntryFee);
    		$idWithdrawalFee = $db->cleanInput($idWithdrawalFee);
    		$currDate = date('Y-m-d H:i:s');

    		if($db->get_data_here_value("SELECT ID FROM product_tb WHERE NAME = '$idProductName' AND CCODE=".$_COOKIE["ccode"]."","ID")>0){
    		     echo json_encode(array("status"=>"exist", "message"=>"Product already exist!"));
    		}else{
    		$params = array($idProductName, $idProductCode, $idMinAmount, $idMaxAmount, $idBalMin, $idBalMax, $idInterestRate, $idPeriod, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO product_tb (NAME, CODE, INITIAL_MIN_AMOUNT, INITIAL_MAX_AMOUNT, BALANCE_MIN, BALANCE_MAX, INTEREST_RATE, INTEREST_PERIOD, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
			$product_id = $db->InsertRecords($query, $params);
    	    
				$params = array($idEntryFee, $idWithdrawalFee, $idProductCode, $currDate, $currDate, $_COOKIE['ccode'], $db->hcode());
    		    $query = "INSERT INTO fee_tb (ENTRY_FEE, WITHDRAWAL_FEE, PRODUCT_ID, DATE_CREATED, DATE_MODIFIED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?)";
				$insert_contribution = $db->InsertRecords($query, $params);
    		   	
    		   	if($insert_contribution>0){
    		   	   echo json_encode(array("status"=>"success", "message"=>"Product saved successfully"));
    		   	}else{
    		   	    echo json_encode(array("status"=>"success", "message"=>"Product saved successfully"));
    		   	  } 
    		}
    	   }
		}
?>