<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $username, $status_id, $othername, $role, $surname, $date, $password;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
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
		$result = $db->getAllData("SELECT atb.ID, atb.CODE, USERNAME, UID, SURNAME, PASSWORD, OTHERNAME, CONTACT, rt.ROLE, STATUS_ID, atb.DATE_CREATED from admin_tb atb JOIN role_tb rt ON atb.USER_ROLE=rt.ID WHERE atb.CCODE =".$_COOKIE["ccode"]." ORDER BY atb.ID DESC");
		if($result!==0){
		foreach($result as $row)
        {
            $this->id = $row['CODE'];
            $this->username = $row['USERNAME'];
            $this->surname = $row["SURNAME"];
            $this->password = $row["PASSWORD"];
        	$this->othername = $row["OTHERNAME"];
        	$this->contact = $row["CONTACT"];
        	$this->role = $row['ROLE'];
        	$this->status_id = $row['STATUS_ID'];
        	$this->date = $row['DATE_CREATED'];
        	
        	if($this->status_id == '1'){
        	    $this->status_id = 'Active';
        	}else{
        	   $this->status_id = 'Inactive'; 
        	}
        	
        	if(isset($row["UID"])){
        	   $biometric="Registered";
        	}else{
        	   $biometric="Not registered";
        	}
        	
			$msg[] = array("id" => $this->id, "biometric"=>$biometric, "username" => $this->username, "password" => substr($row["PASSWORD"], 0, 17),   "name" => $this->surname." ".$this->othername, "role" => $this->role, "contact" => $this->contact, "status_id" => $this->status_id, "date" => $this->date  );
        }
	}
		echo json_encode($msg);
	}
}
?>