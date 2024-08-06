<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $name, $code, $initial_min_amount, $initial_max_amount, $bal_min, $bal_max, $int_rate, $int_period, $conn, $date_created;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
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
		$count=0;
		$result = $db->getAllData("SELECT * FROM calc_comm WHERE TARGET !=8 ORDER BY ID DESC");
		if ($result!==0){
		foreach($result as $row)
        {
         $count++;
		 $user=$db->get_data_here_value("SELECT CONCAT(SURNAME,' ',OTHERNAME) AS NAME FROM admin_tb WHERE UID=".$row["TARGET"]."","NAME");
		 $code=$db->get_data_here_value("SELECT CODE FROM admin_tb WHERE UID=".$row["TARGET"]."","CODE");
		 $time = date('h:i:s a', strtotime($row["TIME_CREATED"]));
		 $msg[] = array("id" => $count, "cid"=>$row["ID"], "code"=>$code, "date" => $row["DATE_CREATED"], "time" =>$time, "amount" => $row["AMOUNT"], "user" => $user);
        }
		echo json_encode($msg);
	}
	}
}
?>