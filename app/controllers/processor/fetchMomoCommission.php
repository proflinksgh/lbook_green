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
	    $this->fetch_contribution();
	}
       function fetch_contribution()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();

		$fetch_contribution=$this->user->getAllData("SELECT ct.ID, SURNAME, OTHERNAME, MONTH, YEAR, DEPOSIT_COMM, CASHOUT_COMM, ct.DATE_CREATED from momo_comm_tb ct JOIN admin_tb adt ON ct.STAFF_ID = adt.ID");
		
		if($fetch_contribution != 0){
		foreach($fetch_contribution as $row)
        {

			$msg[] = array("id" => $row['ID'], "name" => $row['SURNAME']." ".$row['OTHERNAME'], "month"=>$row['MONTH'], "year"=>$row['YEAR'], "depcomm"=>$row['DEPOSIT_COMM'], "cashoutcomm"=>$row['CASHOUT_COMM'], "date"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}else{
		    echo json_encode('0'); 
		}
	}
}
?>