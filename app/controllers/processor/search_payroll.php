<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer, $total, $regcomm, $depcomm;

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
		 
			$this->report();
		
	}


	function report(){

	extract($_POST);
	$db = $this->user_initing;

    $year = $db->cleanInput($year);
    $month = $db->cleanInput($month);

	$push_me_data = false;
	$styler;
	
		$get_contribution = $this->user->getAllData("SELECT * FROM employee_cont_tb");
		$get_commission = $this->user->getAllData("SELECT * FROM employee_commission_tb where MONTH = '$month' AND YEAR = '$year'");

		 require("get_payroll.php");
		 require("get_momo_payroll.php");

                    	
    ?>

		<style type="text/css">
		.master_header
		{
			background: #ffff;
		}

		.make_me_nice
		{
			overflow: auto;
			width: 100%;
		}
		</style>
 <?php
    }
}

?>
