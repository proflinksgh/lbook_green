<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->sms();
	}
       function sms()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$query = "select * from sms_tb ORDER BY ID DESC";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		foreach($result as $row)
        {
            
            if(strpos($row['MESSAGE'], 'deposited')){
                $type = 'Deposit';
            }else if (strpos($row['MESSAGE'], 'withdrawn')){
                $type = 'Withdrawal';
            }else{
                 $type = 'Other';
            }

			$msg[] = array("id" => $row['ID'], "accno" => $row['ACCOUNT_NO'], "message" => $row['MESSAGE'], "contact" => $row['CONTACT'], "date" => $row['DATE_CREATED'], "type"=>$type);
        }
		echo json_encode($msg);
	}
}
?>