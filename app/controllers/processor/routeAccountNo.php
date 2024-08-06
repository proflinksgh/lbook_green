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
	private $prodname, $id, $depamount, $depdate, $withdate, $withamount, $name, $balance, $activity, $withamt=0, $withfees=0, $entfees=0, $depamt=0, $intamt=0, $sms_status, $sms_charge=0, $path;
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
 		
 		
 		$this->depamt=$db->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT FROM deposit_tb where ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."","AMOUNT");
 	
        
        $this->withamt =$db->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT FROM withdrawal_tb where ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."","AMOUNT");
        if(!isset($this->withamt)){
        	$this->withamt = 0;
        }

        $this->withfee=$db->get_data_here_value("SELECT SUM(AMOUNT) as WITHFEE FROM charge_tb where ACCOUNT_NUMBER = '$accno' AND  FEE_TYPE='WITHDRAWAL FEE' AND CCODE = ".$_COOKIE["ccode"]."", "WITHFEE");

         if(!isset($this->withfee)){
        	$this->withfee = 0;
        }
        
 			
 
         $this->sms_charge=$this->user->get_data_here_value("SELECT SUM(AMOUNT) as SMSFEE from charge_tb where ACCOUNT_NUMBER = '$accno' AND FEE_TYPE LIKE '%SMS CHARGE' AND CCODE = ".$_COOKIE["ccode"]."", "SMSFEE");

        if(!isset($this->sms_charge)){
        	$this->sms_charge = 0;
        }
        
        
        
        $this->entfees=$db->get_data_here_value("SELECT AMOUNT FROM charge_tb where ACCOUNT_NUMBER = '$accno' AND FEE_TYPE = 'ENTRY FEE' AND CCODE = ".$_COOKIE["ccode"]."","AMOUNT");
 		
        
        $this->intamt=$db->get_data_here_value("SELECT SUM(AMOUNT) as INTEREST from interest_tb where ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."","INTEREST");
 	
       
      
        if($this->sms_status == '0'){
          $balance = "GH¢".number_format($this->depamt + $this->intamt - $this->withamt - $this->withfee - $this->entfees - $this->sms_charge);  
        }else{
            $balance = "GH¢".number_format($this->depamt + $this->intamt - $this->withamt - $this->withfee - $this->entfees);
        }
        
       
 	    $result = $db->getAllData("SELECT DATE_CREATED, AMOUNT FROM deposit_tb where ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
		if($result!==0){
			foreach($result as $row)
        {
            $this->depdate=$row['DATE_CREATED'];
            $this->depamount= $row['AMOUNT'];
            $this->activity='Deposit';
            
            $msg[] = array("name"=>$this->name, "prodname"=>$this->prodname, "path"=>$this->path, "balance"=>$balance, "totaldeposit"=>$this->depamt, "totalwithdrawal"=>$this->withamt, "entryfee"=>$this->entfees, "withfee"=>$this->withfee, "sms_status"=>$this->sms_status, "sms_charge"=>$this->sms_charge, "totalinterest"=>$this->intamt,  "depdate"=>$this->depdate, "depamount"=>$this->depamount, "activity"=>$this->activity);
 		}
	}
 		
 		
 		$result = $db->getAllData("SELECT DATE_CREATED, AMOUNT FROM withdrawal_tb where ACCOUNT_NUMBER = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
		if($result !==0){
		foreach($result as $row)
        {
            $msg2[] = array("depdate"=>$row['DATE_CREATED'], "depamount"=>$row['AMOUNT'], "activity"=>'Withdrawal');
 			}
 	      }
 		
 		     echo json_encode(array_merge($msg, $msg2));
	}
}
?>

 