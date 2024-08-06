<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $date, $user, $amount, $deposit, $withdrawal, $name, $role, $fees;

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
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		if(isset($_POST["date"])){
		$date = $db->cleanInput($date);
		$date2 = $db->cleanInput($date2);
		
		 if(isset($_POST["user"])){
		 $user = $db->cleanInput($user);
         if($user==="all"){
	     $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2'", "AMOUNT"));	
	     $momo = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='MOMO'", "AMOUNT"));
	     $ecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='E-CASH'", "AMOUNT"));	
	     $other = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='OTHER'", "AMOUNT"));
	     $cuser="ALL USERS";
	 	  }else{
	 		 $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND POSTED_BY=$user", "AMOUNT"));	
	         $momo = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='MOMO' AND POSTED_BY=$user", "AMOUNT"));
	         $ecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='E-CASH' AND POSTED_BY=$user", "AMOUNT"));	
	         $other = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE date(DATE_CREATED)  >= '$date' AND date(DATE_CREATED) <='$date2' AND CATEGORY='OTHER' AND POSTED_BY=$user", "AMOUNT"));
	         $cuser=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE CODE=$user","NAME");
	        $cuser=$_SESSION['fullname'];  
	 		}
	     }	
	    
	    }else{
	     
	     if($_SESSION["status"]==="1"){
	      $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb", "AMOUNT"));
	          $momo = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='MOMO'", "AMOUNT"));
	     $ecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='E-CASH'", "AMOUNT"));	
	     $other = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='OTHER'", "AMOUNT"));
	      $cuser="ALL USERS";
	     }else{
          $totecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE POSTED_BY=".$_SESSION['id']."", "AMOUNT"));
	          $momo = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='MOMO' AND POSTED_BY=".$_SESSION['id']."", "AMOUNT"));
	     $ecash = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='E-CASH' AND POSTED_BY=".$_SESSION['id']."", "AMOUNT"));	
	     $other = number_format($this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT from cashpay_tb WHERE CATEGORY='OTHER' AND POSTED_BY=".$_SESSION['id']."", "AMOUNT"));
	      $cuser=$_SESSION['fullname'];  
	     }
	    }
	     
	    $msg[] = array("totecash"=>isset($totecash)?$totecash:0, "category"=>isset($category)?$category:"ALL", "momo"=>isset($momo)?$momo:0, "ecash"=>isset($ecash)?$ecash:0, "other"=>isset($other)?$other:0, "user"=>$cuser);
		    echo json_encode($msg);
	}
}
?>