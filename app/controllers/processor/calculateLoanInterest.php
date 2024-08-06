<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $current_balance, $date_created, $deposits=0, $withdrawal=0, $fee=0, $search, $product_id, $rate, $period, $date, $account_no, $balance, $date_modified, $interest, $idd, $acc_status;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_product();
	}
       function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$ccode = $_COOKIE["ccode"];

		$result =$db->getAllData("SELECT ACCOUNT_NO, PRODUCT_ID, SUBSCRIPTION, ACC_STATUS, DATE_CREATED, DATE_MODIFIED from account_tb WHERE CCODE = $ccode");
		
		foreach($result as $row)
        {
            $this->account_no = $row['ACCOUNT_NO'];
            $this->product_id = $row['PRODUCT_ID'];
            $this->subscription = $row['SUBSCRIPTION'];
            $this->acc_status = $row['ACC_STATUS'];
            $this->date_created = $row['DATE_CREATED'];
            $this->date_modified = $row['DATE_MODIFIED'];
            
            
        //cHECK if interest is calculated already 
        $year = date("Y"); 
        $month = date('m');
        $interest = $db->get_data_here_value("SELECT ID from interest_tb where YEAR = '$year' AND MONTH = '$month' AND ACCOUNT_NUMBER = '$this->account_no' AND CCODE = $ccode");
  
        if(!isset($interest)){
            
        if($this->account_no){
            
        //Check if account is valid
        if(isset($this->acc_status)&&$this->acc_status == 0){
    
    		$result = $db->getAllData("SELECT INTEREST_RATE, INTEREST_PERIOD from product_tb where ID = '$this->product_id' AND CCODE = $ccode");
            if($result !==0){
    		foreach($result as $row)
        {
           $this->rate = $row['INTEREST_RATE'];
           $this->period = $row['INTEREST_PERIOD']; 
        }
    }
        if($this->rate !=0 || $this->period !=0){
            
            $currDate = date('Y-m-d');
		    $start = strtotime($this->date_modified);
            $end = strtotime($currDate);
            $end = ceil(abs($end) / 86400);
            $start =  ceil(abs($start) / 86400);
            $diff = $end - $start;
            $mature_date =  $this->period - $diff;

            if($mature_date <= 0){
            //Fetch balance     
            $result = $db->getAllData("SELECT BALANCE FROM balance_tb where ACCOUNT_NUMBER = '$this->account_no' AND CCODE = $ccode");
            if($result!==0){
    		foreach($result as $row)
            {
               $this->balance = $row['BALANCE'];
            }
        }
            $amount = $this->rate/100 * $this->balance;
            
            echo "Amount: ".$amount." ".$amount." Balance: ". $this->balance;
            
            $params = array($this->product_id, $this->account_no, '0', $year, $month, $amount, $currDate, $ccode, $db->hcode());
            $query = "INSERT INTO interest_tb (PRODUCT_ID, ACCOUNT_NUMBER, ACCRUE_STATUS, YEAR, MONTH, AMOUNT, DATE_CREATED, CCODE, HCODE) VALUES (?,?,?,?,?,?,?,?,?)";
            $insert_contribution = $db->InsertRecords($query, $params);
		   	
		   	if($insert_contribution){
		   	    
		   	$query = $db->updateFunction("UPDATE account_tb SET DATE_MODIFIED = '$currDate' where ACCOUNT_NO = '$this->account_no' AND CCODE = $ccode");

		   	                                }
                                      }
                                  }
                            }
                        }
            
                }else{
   
                }

        	 }
        }
    }
?>