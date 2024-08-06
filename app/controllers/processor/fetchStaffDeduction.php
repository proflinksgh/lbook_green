<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $fname, $othername;

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
	    $this->fetch_deduction();
	}
       function fetch_deduction()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$staffid = $db->cleanInput($staffid);

		$fetch_deduct=$this->user->get_data_here_value("select SUM(AMOUNT) as AMOUNT from employee_deduction_tb where ID = '$staffid'", "AMOUNT");
        
        if($fetch_deduct == ''){
           echo '0'; 
        }else{
           echo $fetch_deduct;
        }
        
            
	}
}
?>