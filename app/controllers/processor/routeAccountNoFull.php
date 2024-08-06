<?php
 $accountName = ''
?>


<?php 
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $role;
	private $user;
	private $pass, $cordinate;
	private $surname;
	private $othername, $company;
	private $prodname, $id, $depamount, $depdate, $withdate, $withamount, $name, $balance, $activity, $withamt, $withfees, $entfees, $depamt, $intamt, $sms_status, $sms_charge = 0;
	private $conn;

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
		$this->routeAccount();
	}

	function routeAccount()
	{
		extract($_POST);
		$db = $this->user_initing;
		$accno = $db->cleanInput($accno);
		$date1 = $db->cleanInput($date1);
		$date2 = $db->cleanInput($date2);
		$msg = array();
        $msg2 = array();
        $msg3 = array();
        
		$result = $db->getAllData("SELECT FIRSTNAME, LASTNAME, OTHERNAME, IMAGE_PATH, NAME from client_tb ct JOIN account_tb atb ON ct.CODE = atb.CLIENT_ID JOIN product_tb pt ON pt.CODE = atb.PRODUCT_ID JOIN balance_tb bt ON bt.CLIENT_ID=ct.CODE WHERE ACCOUNT_NO= '$accno' AND ct.CCODE = ".$_COOKIE["ccode"]."");

	 if($result!==0){
		foreach($result as $row)
        {
            
          $this->name = $row['FIRSTNAME']." ".$row['LASTNAME']." ".$row['OTHERNAME'];
          $this->prodname = $row['NAME'];
           $this->path = $row['IMAGE_PATH'];
           
 		}
	}
 		
 		
 		$result2=$db->getAllData("SELECT SUM(AMOUNT) as AMOUNT FROM deposit_tb where ACCOUNT_NUMBER = '$accno' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");

		
		if($result2!=0){
		foreach($result2 as $row)
        {
             if(!isset($row['AMOUNT'])){
              $this->depamt = 0;  
            }else{
               $this->depamt=$row['AMOUNT']; 
            }
        }
     }
        
        
        
        $result2=$db->getAllData("SELECT SUM(AMOUNT) as AMOUNT FROM withdrawal_tb where ACCOUNT_NUMBER = '$accno' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");

		if($result2!==0){
			foreach($result2 as $row)
        {
             if(!isset($row['AMOUNT'])){
              $this->withamt = 0;  
            }else{
               $this->withamt=$row['AMOUNT']; 
            }
        }
    }
        
        
        $result2=$db->getAllData("SELECT SUM(AMOUNT) as WITHFEE FROM charge_tb where ACCOUNT_NUMBER = '$accno' AND FEE_TYPE='WITHDRAWAL FEE' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");

		if($result2!==0){
		foreach($result2 as $row)
        {
            if(!isset($row['WITHFEE'])){
              $this->withfee = 0;  
            }else{
               $this->withfee=$row['WITHFEE']; 
            }
        }
    }
        
        
        
        $this->sms_status=$this->user->get_data_here_value("SELECT SMS_STATUS from account_tb where ACCOUNT_NO = '$accno' AND CCODE = ".$_COOKIE["ccode"]."", "SMS_STATUS");
        
        if($this->sms_status == '0'){
            $this->sms_charge=$this->user->get_data_here_value("SELECT SUM(AMOUNT) as SMSFEE from charge_tb where ACCOUNT_NUMBER = '$accno' AND FEE_TYPE LIKE '%SMS CHARGE' AND CCODE = ".$_COOKIE["ccode"]."", "SMSFEE");
        }
        
        
        $result2=$db->getAllData("SELECT AMOUNT FROM charge_tb where ACCOUNT_NUMBER = '$accno' AND FEE_TYPE = 'ENTRY FEE' AND CCODE = ".$_COOKIE["ccode"]."");
		if($result2!==0){
			foreach($result2 as $row)
        {
             if(!isset($row['AMOUNT'])){
              $this->entfees = 0;  
            }else{
               $this->entfees=$row['AMOUNT']; 
            }
        }
    }
        
        
        
        
        $result2=$db->getAllData("SELECT SUM(AMOUNT) as INTEREST from interest_tb where ACCOUNT_NUMBER = '$accno' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");

		if($result2!==0){
			foreach($result2 as $row)
        {
            if(!isset($row['INTEREST'])){
              $this->intamt = 0;  
            }else{
               $this->intamt=$row['INTEREST']; 
            }
            
        }
    }
        
        if($this->sms_status == '0'){
          $balance = "GH¢".number_format($this->depamt + $this->intamt - $this->withamt - $this->withfee - $this->entfees - $this->sms_charge);  
        }else{
            $balance = "GH¢".number_format($this->depamt + $this->intamt - $this->withamt - $this->withfee - $this->entfees);
        }
        
        

 	    $result2 = $db->getAllData("SELECT DATE_CREATED, AMOUNT FROM deposit_tb where ACCOUNT_NUMBER = '$accno' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");
		 if($result2!==0){
		
			foreach($result2 as $row)
        {
            $this->depdate=$row['DATE_CREATED'];
            $this->depamount= $row['AMOUNT'];
            $this->activity='Deposit';
            
            $msg[] = array("name"=>$this->name, "prodname"=>$this->prodname, "path"=>$this->path, "balance"=>$balance, "totaldeposit"=>$this->depamt, "totalwithdrawal"=>$this->withamt, "entryfee"=>$this->entfees, "withfee"=>$this->withfee,  "totalinterest"=>$this->intamt,  "depdate"=>$this->depdate, "depamount"=>$this->depamount, "activity"=>$this->activity);
 		}
	}else{
		$msg[] = array("name"=>$this->name, "prodname"=>$this->prodname, "path"=>"N/A", "balance"=>$balance, "totaldeposit"=>$this->depamt, "totalwithdrawal"=>$this->withamt, "entryfee"=>$this->entfees, "withfee"=>$this->withfee,  "totalinterest"=>$this->intamt,  "depdate"=>"N/A", "depamount"=>"0", "activity"=>"Deposit");
	}
 		
 	//	"sms_status"=>$this->sms_status, "sms_charge"=>$this->sms_charge,
 		
 		$result2 = $db->getAllData("SELECT DATE_CREATED, AMOUNT FROM withdrawal_tb where ACCOUNT_NUMBER = '$accno' AND date(DATE_CREATED)  >= '$date1' AND date(DATE_CREATED) <='$date2' AND CCODE = ".$_COOKIE["ccode"]."");
		   
		if($result2!==0){
		foreach($result2 as $row)
        {
            $msg2[] = array("depdate"=>$row['DATE_CREATED'], "depamount"=>$row['AMOUNT'], "activity"=>'Withdrawal');
 		}
 	   }else{
 	   	 $msg2[] = array("depdate"=>"0", "depamount"=>"0", "activity"=>'Withdrawal');
 	   }
 		
 		     echo json_encode(array_merge($msg, $msg2));
	}
}
?>

 