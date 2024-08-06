<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private  $conn;

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
		$result = $db->getAllData("SELECT * FROM loanreg_tb WHERE CCODE=".$_COOKIE['ccode']."");
		if($result !== 0){
		foreach($result as $row)
     {
     	$row["regtype"]=$row["regtype"]==="1"?"Business":"Group";
          $image="<img src='https://drive.google.com/thumbnail?id=".$row["image"]."' width='100' height='100'>";
			$msg[] = array("ccode" => $_COOKIE["ccode"], "image" => $image, "id" => $row["id"], "code" => $row["code"], "fullname" => $row["surname"]." ".$row["othername"], "phone" => $row["phone"], "gender" => $row["gender"], "dob" => $row["dob"], "date"=>$row["date_created"], "regtype"=>$row["regtype"], "dependant" => $row["dependant"], "idtype" => $row["idtype"], "idno" => $row["idno"]);
        }
		echo json_encode($msg);
	 }else{
	     echo json_encode("none");
	 }
	}
}
?>