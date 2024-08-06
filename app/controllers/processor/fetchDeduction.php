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

		$fetch_deduction=$this->user->getAllData("SELECT et.ID, SURNAME, OTHERNAME, et.TYPE, AMOUNT, DISTRIBUTION, et.DATE_CREATED from employee_deduction_tb et JOIN admin_tb adt ON et.STAFF_ID = adt.ID WHERE adt.CCODE=".$_COOKIE["ccode"]."");
		if($fetch_deduction != 0){
		foreach($fetch_deduction as $row)
        {
			$msg[] = array("id" => $row['ID'], "name" => $row['SURNAME']." ".$row['OTHERNAME'], "type"=>$row['TYPE'], "amount"=>$row['AMOUNT'], "distribution"=>$row['DISTRIBUTION'], "date"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}else{
		    echo json_encode("none"); 
		}
	}
}
?>