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
		$accno = $db->cleanInput($accno);
        $check = $this->user->get_data_here_value("SELECT ID FROM account_tb where ACCOUNT_NO = '$accno' AND CCODE = ".$_COOKIE['ccode']." ");
        		   
    if($check != 0){
        echo 0;
     }else{
         echo 1;
     }
  }
}
?>