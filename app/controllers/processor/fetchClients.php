<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $date, $fname, $next_of_kin_contact, $next_of_kin, $lname, $othername, $dob, $gender, $contact1, $contact2, $email, $country, $region, $city, $occupation, $identification, $idnumber, $conn, $date_created, $area, $post_by;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_product();
	}
       function fetch_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$msg = array();
		$result = $db->getAllData("SELECT ct.ID, ct.CODE, ct.CCODE, FIRSTNAME, LASTNAME, ct.OTHERNAME, ct.IMAGE_PATH, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, OCCUPATION, AREA, IDENTIFICATION, IDNUMBER, ct.DATE_CREATED, USERNAME  from client_tb ct JOIN admin_tb atb ON ct.POST_BY = atb.CODE WHERE ct.CCODE = ".$_COOKIE["ccode"]." ORDER BY ct.ID DESC");
		if($result !== 0){
		foreach($result as $row)
        {
            $this->id = $row['CODE'];
            $this->date = $row['DATE_CREATED'];
            $this->fname = $row['FIRSTNAME'];
        	$this->lname = $row["LASTNAME"];
        	$this->othername = $row["OTHERNAME"];
        	$this->dob = $row['DOB'];
        	$this->gender = $row['GENDER'];
        	$this->contact1 = $row['CONTACT_1'];
			$this->next_of_kin = $row['NEXT_OF_KIN'];
			$this->next_of_kin_contact = $row['NEXT_OF_KIN_CONTACT'];
			$this->city = $row['CITY'];
			$this->area = $row['AREA'];
			$this->occupation = $row['OCCUPATION'];
			$this->identification = $row['IDENTIFICATION'];
			$this->idnumber = $row['IDNUMBER'];
			$this->post_by = $row['USERNAME'];
			
			
			$msg[] = array("ccode" => $_COOKIE["ccode"], "photo" => $row["IMAGE_PATH"], "id" => $this->id, "date" => $this->date, "firstname"=>$this->fname, "lastname"=>$this->lname, "othername"=>$this->othername, "name" => $this->fname." ".$this->lname." ".$this->othername, "dob" => $this->dob, "gender" => $this->gender, "contact1" => $this->contact1, "next_of_kin" => $this->next_of_kin, "next_of_kin_contact" => $this->next_of_kin_contact,   "city" => $this->city, "area" => $this->area, "occupation" => $this->occupation, "identification" => $this->identification, "idnumber" => $this->idnumber, "post_by" => $this->post_by);
        }
		echo json_encode($msg);
	 }else{
	     echo json_encode("none");
	 }
	}
}
?>