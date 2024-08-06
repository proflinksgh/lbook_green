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

		$fetch_contribution=$this->user->getAllData("SELECT ct.ID, SURNAME, OTHERNAME, SSNIT_EMPLOYER, SSNIT_EMPLOYEE, WELFARE, BONUS, DEDUCTION, ct.DATE_CREATED from employee_cont_tb ct JOIN admin_tb adt ON ct.STAFF_ID = adt.ID WHERE adt.CCODE = ".$_COOKIE["ccode"]."");
		
		if($fetch_contribution != 0){
		foreach($fetch_contribution as $row)
        {

			$msg[] = array("id" => $row['ID'], "name" => $row['SURNAME']." ".$row['OTHERNAME'], "ssnitemployer"=>$row['SSNIT_EMPLOYER'], "ssnitemployee"=>$row['SSNIT_EMPLOYEE'], "welfare"=>$row['WELFARE'], "bonus"=>$row['BONUS'], "deduction"=>$row['DEDUCTION'], "date"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}else{
		    echo json_encode('0'); 
		}
	}
}
?>