<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
	private $conn, $id, $fee, $min_amount, $max_amount;

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
	    $id = $db->cleanInput($id);
		$amount = $db->cleanInput($amount);
		$distribution = $db->cleanInput($distribution);

		
        $update_deduction = $this->user->updateFunction("UPDATE employee_deduction_tb SET AMOUNT = '$amount', DISTRIBUTION = '$distribution' where ID = '$id'");
    	
    	echo $update_deduction;
        	           }
    		        }
    ?>