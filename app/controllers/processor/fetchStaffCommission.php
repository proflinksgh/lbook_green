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
	    $this->fetch_comm();
	}
       function fetch_comm()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$fetch_staff_comm=$this->user->getAllData("select ct.ID, SURNAME, OTHERNAME, MONTH, YEAR, NO_OF_REGIST, REG_COMMISSION, TOTAL_DEPOSIT, DEPOSIT_COMM, ct.DATE_CREATED from employee_commission_tb ct JOIN admin_tb adt ON ct.STAFF_ID = adt.ID");
		
		if($fetch_staff_comm != 0){
		foreach($fetch_staff_comm as $row)
        {

			$msg[] = array("id" => $row['ID'], "name" => $row['SURNAME']." ".$row['OTHERNAME'], "month"=>$row['MONTH'], "year"=>$row['YEAR'], "noregist"=>$row['NO_OF_REGIST'], "regcomm"=>number_format($row['REG_COMMISSION']), "deposit"=>number_format($row['TOTAL_DEPOSIT']), "depcomm"=>number_format($row['DEPOSIT_COMM']), "date"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}else{
		    echo json_encode('0'); 
		}
	}
}
?>