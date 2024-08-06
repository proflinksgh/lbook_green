<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $company, $category, $city, $contact, $status, $code, $conn;
	  function __construct()
	{
	    $this->user_tag = $this->model('master_class2');
		$this->user_initing = $this->model('extend_function2');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class2();
	}
	
	public function index()
	{
	    $this->fetch_dwadie_acc();
	}
	
       function fetch_dwadie_acc()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$result = $db->getAllData("SELECT ut.ID, COMPANY, CATEGORY, CONTACT, CITY, ACC_STATUS, CODE, DATE_CREATED FROM user_tb ut JOIN activation_tb at on ut.ID = at.USER_ID WHERE CCODE = ".$_COOKIE["ccode"]." ORDER BY ut.ID DESC");
		foreach($result as $row)
        {
        	$this->id = $row["ID"];
        	$this->company = $row["COMPANY"];
        	$this->category = $row['CATEGORY'];
        	$this->city = $row['CITY'];
        	$this->contact = $row['CONTACT'];
			$this->status = $row['ACC_STATUS'];
			$this->code = $row['CODE'];
			$this->date = $row['DATE_CREATED'];
			
			if($this->status == '1'){
			    $this->status = 'Active';
			}else{
			    $this->status = 'Inactive';
			}
			
			$msg[] = array("id" => $this->id, "company" => $this->company, "category" => $this->category, "city" => $this->city, "contact" => $this->contact, "status" => $this->status, "code" => $this->code, "date" => $this->date);
        }
		echo json_encode($msg);
	}
	 
}
?>