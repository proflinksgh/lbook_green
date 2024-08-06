<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $surname;
	private $username;
	private $othername;
	private $contact;
	private $city;
	private $id;
	private $role;
	private $amount;
    private $code;
    private $details;
    private $receipient;

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
		$id = $db->cleanInput($id);
		$idProductNameupdate  = $db->cleanInput($idProductNameupdate);
		$idProductCodeupdate = $db->cleanInput($idProductCodeupdate);
		$idMinAmountupdate = $db->cleanInput($idMinAmountupdate);
		$idMaxAmountupdate = $db->cleanInput($idMaxAmountupdate);
		$idBalMinupdate = $db->cleanInput($idBalMinupdate);
		$idBalMaxupdate = $db->cleanInput($idBalMaxupdate);
		$idInterestupdate = $db->cleanInput($idInterestupdate);
		$idPeriodupdate = $db->cleanInput($idPeriodupdate);
		$idEntryFeeupdate = $db->cleanInput($idEntryFeeupdate);
		$idWithdrawalFeeupdate = $db->cleanInput($idWithdrawalFeeupdate);
		$currDate = date('Y-m-d');
		$currDate = $currDate." ".date("h:i:sa");

		$update_ = $db->updateFunction("UPDATE product_tb SET NAME = '$idProductNameupdate', CODE = '$idProductCodeupdate', INITIAL_MIN_AMOUNT = '$idMinAmountupdate', INITIAL_MAX_AMOUNT = '$idMaxAmountupdate', BALANCE_MIN = '$idBalMinupdate', INTEREST_RATE = '$idInterestupdate', INTEREST_PERIOD = '$idPeriodupdate', DATE_MODIFIED = '$currDate' WHERE CODE = $idProductCodeupdate AND CCODE = ".$_COOKIE["ccode"]."");

		$update_ = $db->updateFunction("UPDATE fee_tb SET ENTRY_FEE = '$idEntryFeeupdate', WITHDRAWAL_FEE = '$idWithdrawalFeeupdate', DATE_MODIFIED = '$currDate' where PRODUCT_ID = '$idProductCodeupdate' AND CCODE = ".$_COOKIE["ccode"]."");
		
    	 if($update_ == "0"){
    		    echo json_encode(array('status'=>'success', 'message'=>'Product updated successfully'));
    	 }else{
    		    echo json_encode(array('status'=>'success', 'message'=>'Product updated successfully'));
    	 }
	}
}

?>