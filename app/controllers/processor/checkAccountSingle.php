<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $product_name, $current_balance, $date, $deposits=0, $withdrawal=0, $fee=0, $search, $interest=0, $depdate, $balance;

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
	    $this->fetch_product();
	}
       function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$currDate = date('Y-m-d H:i:s');
		$accountno=$db->cleanInput($accountno);		
		
		$query = $this->user->getAllData("SELECT * from account_tb WHERE ACCOUNT_NO='$accountno' AND CCODE = ".$_COOKIE["ccode"]."");
		foreach($query as $row)
        {
        if($row['PRODUCT_ID'] == '2'){
                    if(isset($row['DATE_CREATED'])){
                    $start = strtotime($row['DATE_CREATED']);
                    $end = strtotime($currDate);
                    $days_between = ceil(abs($end - $start) / 86400);
                    if($days_between >= $row['SUBSCRIPTION']){
                    $balance = $this->user->updateFunction("UPDATE account_tb SET ACC_STATUS = '1', DATE_CREATED=DATE_CREATED, DATE_MODIFIED = '$currDate' where ACCOUNT_NO = '".$row['ACCOUNT_NO']."'");
                    }
                  }
                
        }else{
            	    $date_created = $this->user->get_data_here_value("SELECT MAX(DATE_CREATED) as MAXDATE from deposit_tb WHERE ACCOUNT_NUMBER = '".$row['ACCOUNT_NO']."' AND CCODE = ".$_COOKIE['ccode']." ", "MAXDATE");
        		    if($date_created != 0){
        		    $start = strtotime($date_created);
                    $end = strtotime($currDate);
                    $days_between = ceil(abs($end - $start) / 86400);
                    if($days_between>=90){
                    $balance = $this->user->get_data_here_value("SELECT BALANCE from balance_tb WHERE ACCOUNT_NUMBER = '".$row['ACCOUNT_NO']."' AND CCODE = ".$_COOKIE["ccode"]." ", "BALANCE");
                    if($balance <=20){
                        //Set account to inactive (1)
                     $balance = $this->user->updateFunction("UPDATE account_tb SET ACC_STATUS = '1', DATE_CREATED=DATE_CREATED, DATE_MODIFIED = '$currDate' where ACCOUNT_NO = '".$row['ACCOUNT_NO']."' AND CCODE=".$_COOKIE["ccode"]." ");
                    
                            }
                         }
        		    }
        		  		   
        }
     }
     echo json_encode(array("status"=>"success"));
  }
}
?>