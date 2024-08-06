<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $name, $code, $min_amount, $max_amount, $form_fee, $processing_fee, $interest, $date_created;

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	public function index()
	{
	    $this->fetch_loan_product();
	}
       function fetch_loan_product()
		{
		extract($_POST);
		$db = $this->user_initing;
		$client_id = $db->cleanInput($client_id);
		$msg = array();
		$result = $db->getAllData("SELECT * FROM client_tb WHERE ID = $client_id AND CCODE=".$_COOKIE["ccode"]."");
		if($result !== 0){
		foreach($result as $row)
        {
		$msg[] = array("id" => $row["ID"], "code" => $row["CODE"], "photo" => $row["IMAGE_PATH"], "fullname" => $row["FIRSTNAME"]." ".$row["LASTNAME"]." ".$row["OTHERNAME"] , "phone" => $row["CONTACT_1"], "idno" => $row["IDNUMBER"]);
        }
		echo json_encode($msg);
	   }else{
	   	echo json_encode("none");
	   }
	}
}
?>