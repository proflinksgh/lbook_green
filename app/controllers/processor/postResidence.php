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
        $this->post_residence();
	}

	function post_residence()
	   {
		    extract($_POST);
		    $db = $this->user_initing;
    		$residence = $db->cleanInput($residence);
			if($db->get_data_here_value("SELECT ID FROM residence_tb WHERE AREA = '$residence' AND CCODE = ".$_COOKIE["ccode"]."","ID")>0){
			 echo json_encode(array('status'=>'exist'));
			}else{
			 $params = array($residence, $_COOKIE['ccode'], $db->hcode());
		    $query = "INSERT INTO residence_tb (AREA, CCODE, HCODE) VALUE (?,?,?)";
			$insert_ = $db->InsertRecords($query, $params);
    		 if($insert_>0){
    		   	     echo json_encode(array('status'=>'success'));
		   	 }else{
		   	     echo json_encode(array('status'=>'failed'));
		   	 }
			}
    	 }
	}
?>