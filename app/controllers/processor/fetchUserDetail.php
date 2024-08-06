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
		$this->user->calculateBalance($_POST["accno"]);
	    $this->fetch_deduction();
	}
       function fetch_deduction()
		{
		extract($_POST);
		$db = $this->user_initing;
		$accno = $db->cleanInput($accno);
		$msg = array();
		$details=$db->getAllData("SELECT adt.ID, adt.CODE, FIRSTNAME, LASTNAME, OTHERNAME, CONCAT(FIRSTNAME, ' ', LASTNAME, ' ', OTHERNAME) AS fullname, adt.CONTACT_1, adt.CITY, adt.AREA, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, DOB, OCCUPATION, IMAGE_PATH, adt.CODE, adt.IDNUMBER, ACCOUNT_NO, IMAGE_PATH FROM client_tb adt JOIN account_tb acc ON adt.CODE = acc.CLIENT_ID WHERE ACCOUNT_NO = '$accno' AND acc.CCODE = ".$_COOKIE["ccode"]."");
		if($details != 0){
		foreach($details as $row)
        {
         echo json_encode(array("id"=>$row["ID"], "code"=>$row["CODE"], "firstname"=>$row["FIRSTNAME"], "lastname"=>$row["LASTNAME"], "othername"=>$row["OTHERNAME"], "name"=>$row["fullname"], "dob"=>$row["DOB"], "contact"=>$row["CONTACT_1"], "nok"=>$row["NEXT_OF_KIN"], "nokc"=>$row["NEXT_OF_KIN_CONTACT"], "city"=>$row["CITY"], "area"=>$row["AREA"], "occupation"=>$row["OCCUPATION"], "photo"=>$row["IMAGE_PATH"]));
        }
        //  echo json_encode($msg);
		}else{
		 echo json_encode('none'); 
		}
	}
}
?>