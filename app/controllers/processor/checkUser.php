<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $conn;
	private $contact;



	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
	}
	
	
		public function index()
	{
	    
	    $this->checkContact();

	}


	function checkContact()
	{
		extract($_POST);
		$db = $this->user_initing;
		$user = $db->cleanInput($user);
		$result = $db->getAllData("SELECT CONTACT from admin_tb WHERE USERNAME = '$user' AND CCODE = ".$_COOKIE["ccode"]." ");
		if ($result !== 0){
		foreach($result as $row)
        {
			echo $row['CONTACT'];
        }
	}
	}
}

?>