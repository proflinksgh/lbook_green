<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount, $cashoutcomm, $depcomm, $role;

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
        $this->deduction();
	}

	function deduction()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$currDate = date('Y-m-d H:i:s');
		$currPeriod = date('d');
		$year = date('Y');
		$month = $this->user->get_full_month(date('M'));

		$employee = $this->user->getAllData("SELECT * FROM admin_tb");
 		foreach($employee as $row){
 		    if($row['ID'] != '2'||$row['ID'] != '1'){
 		       $this->id = $row['ID'];  
 		       $this->role = $row['USER_ROLE'];  
 		    }
 		    
 		      $deduction = $this->user->get_data_here_value("SELECT SUM(AMOUNT) as AMOUNT FROM employee_deduction_tb where STAFF_ID = '$this->id'", "AMOUNT");  
 		      $update_deduction = $this->user->updateFunction("UPDATE employee_cont_tb SET DEDUCTION = '$deduction' where STAFF_ID = '$this->id'");
                
	            	}
 	            }
            }
    ?>