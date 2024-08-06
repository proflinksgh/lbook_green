<?php
class amwork_controller extends route
{
	private $user_tag, $username;
	private $user_initing;
	private $date_composer;
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
        $this->post_occupation();
	}

	function post_occupation()
	   {
		    extract($_POST);
		    $db = $this->user_initing;
    		$occupation = $db->cleanInput($occupation);
			$params = array($occupation, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO occupation_tb (OCCUPATION, CCODE, HCODE) VALUE (?,?,?)";
			$insert_contribution = $db->InsertRecords($query, $params);
    		if($insert_contribution){
    		   	  echo "success";
    		   	}else{
    		   	  echo "failed";
    		   	             }
    		}
	}
?>