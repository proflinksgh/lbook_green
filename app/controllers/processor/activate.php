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
	private $contractor_type, $id;
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
		$this->activate();
	}
	
	function activate()
	{
	    extract($_POST);
		$db = $this->user_initing;
		$code = $db->cleanInput($code);
		$period = $db->cleanInput($period);
		if($db->activate($code)->status=="success"){
		 $currDate = date('Y-m-d');
         $days_left = $db->get_data_here_value("SELECT DAYS_LEFT from subscription_tb WHERE CCODE = ".$_COOKIE['ccode']."", "DAYS_LEFT");
         $newsubscribe = $days_left + $period; 
         $update_ = $db->updateFunction("UPDATE activation_tb SET NEXT_DATE = '$currDate', USED_CODE = '$code' WHERE CCODE= ".$_COOKIE["ccode"]."");      
         $update_ = $db->updateFunction("UPDATE subscription_tb SET SUBSCRIPTION = $newsubscribe WHERE CCODE=".$_COOKIE["ccode"]."");
         if($db->updateValidation($_COOKIE['ccode'])){
          echo json_encode(array("status"=>"success", "message"=>"Product activation is successful"));	
         }
		}else{
		 echo json_encode(array("status"=>"failed", "message"=>"Invalid activation code entered"));	
		}
    }
 }
?>