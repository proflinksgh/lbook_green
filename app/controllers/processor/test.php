<?php 
class amwork_controller extends route
{

	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $acc_type;
	private $user;
	private $pass;
	private $conn;

	function __construct()
	{
	    $this->user_tag = $this->model('master_class');

		$this->user_initing = $this->model('extend_function');

		$this->date_composer = $this->user_initing->timer;

		$this->conn = new master_class();
	}

	public function index()
	{
		
		
		$this->login();

	}

	function login()
	{

		
		$msg = '';

		extract($_POST);
		$db = $this->user_initing;
		
		$user = $db->cleanInput($user);
		$pass = $db->cleanInput($pass);
	

		$query = "SELECT ACC_TYPE FROM admin_tb where USERNAME='$user' AND PASSWORD='$pass'";
		

		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();

		foreach($result as $row)
        {
            $this->acc_type = $row['ACC_TYPE'];
      	
			$msg = $this->acc_type;
        }
		
		echo json_encode($msg); 
		

	}
}

?>