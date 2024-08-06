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
		$accno = $db->cleanInput($accno);
		$subscribed = $db->cleanInput($subscribed);
		
        $reactivate = $this->user->updateFunction("UPDATE account_tb SET ACC_STATUS = '0', DATE_CREATED='$currDate', DATE_MODIFIED = '$currDate', SUBSCRIPTION = '$subscribed' where ACCOUNT_NO = '$accno' AND CCODE = ".$_COOKIE["ccode"]."");
        if($reactivate == '0'){
            echo "success";
        }else{
            echo "failed";
        }
    }
}
?>