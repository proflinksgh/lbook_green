<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer, $conn, $user;

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
	    $this->profile();
	}
       function profile()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$month = $db->get_full_month(date('M'));
		$year = date('Y');
		
		$today = date('Y-m-d');
	    $depcomm = $db->get_data_here_value("SELECT SUM(AMOUNT) as DEPOSITCOMM FROM sales_tb where POSTED_BY = $user AND date(DATE_CREATED) = '$today'", "DEPOSITCOMM");
	    echo json_encode(array("sales"=>$depcomm));
		}
}
?>