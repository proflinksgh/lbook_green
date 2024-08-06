<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $date, $fname, $lname, $othername, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_noaccount();
	}
       function fetch_noaccount()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$id=$_SESSION["id"];
		if($_SESSION["status"]==="1"){
		  $result = $db->getAllData("SELECT ID, FIRSTNAME, LASTNAME, OTHERNAME,  DATE_CREATED from client_tb WHERE ACCOUNT_STATUS = 2 AND CCODE=".$_COOKIE["ccode"]."");  
		}else{
		  $result = $db->getAllData("SELECT ID, FIRSTNAME, LASTNAME, OTHERNAME,  DATE_CREATED from client_tb WHERE ACCOUNT_STATUS = 2 AND POSTED_BY=".$user." AND CCODE=".$_COOKIE["ccode"]."");
		}
		if($result!==0){
		foreach($result as $row)
        {
            $this->id = $row['ID'];
            $this->date = $row['DATE_CREATED'];
            $this->fname = $row['FIRSTNAME'];
        	$this->lname = $row["LASTNAME"];
        	$this->othername = $row["OTHERNAME"];
        
			$msg[] = array("id" => $this->id, "date" => $this->date, "name" => $this->fname." ".$this->lname." ".$this->othername);
        }
		echo json_encode($msg);
	}
	}
}
?>