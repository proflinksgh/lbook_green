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
		$client_id=$db->cleanInput($client_id);
		$msg = array();
        $result = $db->get_data_here_value("SELECT ACCOUNT_STATUS from client_tb WHERE ID = $client_id","ACCOUNT_STATUS");
        if($result==="2"){
            echo json_encode(array("status"=>"approve"));
        }else if($result==="4"){
            echo json_encode(array("status"=>"disapprove")); 
        }
	}
}
?>