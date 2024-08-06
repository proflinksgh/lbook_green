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
	    $this->fetch_search();
	}
       function fetch_search()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$user=$_SESSION["id"];
        if($_SESSION["status"]==="1"){
         $fetch_loan=$this->user->getAllData("SELECT mt.ID, DEPOSIT, DEPOSIT_COMM, CASHOUT, CASHOUT_COMM, SURNAME, OTHERNAME, mt.DATE_CREATED from momo_trans_tb mt JOIN admin_tb adt ON mt.POSTED_BY = adt.CODE");
        }else{
         $fetch_loan=$this->user->getAllData("SELECT mt.ID, DEPOSIT, DEPOSIT_COMM, CASHOUT, CASHOUT_COMM, SURNAME, OTHERNAME, mt.DATE_CREATED from momo_trans_tb mt JOIN admin_tb adt ON mt.POSTED_BY = adt.CODE WHERE POSTED_BY=$user");
        }
		
		if($fetch_loan != 0){
		foreach($fetch_loan as $row)
        {
            $this->fname = $row['SURNAME'];
        	$this->othername = $row["OTHERNAME"];
      
			$msg[] = array("id" => $row['ID'], "name" => $this->fname." ".$this->othername, "deposit" => $row['DEPOSIT'], "depcomm" => $row['DEPOSIT_COMM'], "cashout" => $row['CASHOUT'], "cashoutcomm"=>$row['CASHOUT_COMM'], "date"=>$row['DATE_CREATED']);
        }
            
            echo json_encode($msg);
		}
	}
}
?>