<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $deposit, $deposit_date, $withdrawal_date, $deposit_by, $withdrawal, $withdrawal_by;

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
		$result = $db->getAllData("SELECT dt.DATE_CREATED, USERNAME, AMOUNT from deposit_tb dt join admin_tb atb on dt.CREATED_BY = atb.ID WHERE dt.CCODE=".$_COOKIE["ccode"]." ORDER BY dt.ID DESC LIMIT 1");
		if($result!==0){
		foreach($result as $row)
        {
        	$this->deposit = number_format($row['AMOUNT']);
        	$this->deposit_by = $row['USERNAME'];
            $this->deposit_date = $row['DATE_CREATED'];
          }
	   }
        
      	$result = $db->getAllData("SELECT dt.DATE_CREATED, USERNAME, AMOUNT from withdrawal_tb dt join admin_tb atb on dt.CREATED_BY = atb.ID WHERE dt.CCODE=".$_COOKIE["ccode"]." ORDER BY dt.ID DESC LIMIT 1");
		if($result){
		foreach($result as $row)
        {
           
        	$this->withdrawal = number_format($row['AMOUNT']);
        	$this->withdrawal_by = $row['USERNAME'];
        	$this->withdrawal_date = $row['DATE_CREATED'];
        	
        }
        $msg[] = array("deposit" => $this->deposit, "deposit_date" => $this->deposit_date, "withdrawal_date" => $this->withdrawal_date, "deposit_by" => $this->deposit_by, "withdrawal" => $this->withdrawal, "withdrawal_by" => $this->withdrawal_by);
        
		echo json_encode($msg);
	}
	}
}
?>