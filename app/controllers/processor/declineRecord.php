<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $ids = array();
	
	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}


	 function decline_record()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);

		$query = "UPDATE referral_tb set STATUS = 3 where ID = '$id'";
		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
			echo 'success';
		}else{
				echo 'failed';
		}
		
	}

	public function index()
	{
      $this->decline_record();
	}
}?>