<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $ids = array();
	
	function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	
	public function index()
	{
        $this->delete();
	}



    function delete()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$currDate = date('Y-m-d H:i:s');

		$ids = $db->cleanInput($ids);
		$query = "INSERT INTO client_temp_tb (ID, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY) SELECT ID, FIRSTNAME, LASTNAME, OTHERNAME, DOB, GENDER, CONTACT_1, NEXT_OF_KIN, NEXT_OF_KIN_CONTACT, REGION, CITY, AREA, OCCUPATION, IDENTIFICATION, IDNUMBER, DATE_CREATED, DATE_MODIFIED, ACCOUNT_STATUS, IMAGE_PATH, POST_BY FROM client_tb WHERE CODE IN ($ids) AND CCODE = ".$_COOKIE["ccode"]."";

		$stmt = $this->conn->link->prepare($query);
		$stmt->execute();

		if($stmt){
		
		$countno = substr_count($ids, ",");
		if($countno>0){
		  $ids = explode(",", $ids);
		  for($i=0;$i<$countno;$i++){
		  	$code = $ids[$i];
		  	$gethash = $db->get_data_here_value("SELECT HCODE FROM client_tb WHERE CODE = $code","HCODE");
		  	
		  	$params = array($_COOKIE['ccode'], $gethash, "client_tb", $currDate);
			$ins_delist = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $this->user->InsertRecords($query, $params);
		  }
		}else{
			$gethash = $db->get_data_here_value("SELECT HCODE FROM client_tb WHERE CODE = $ids AND CCODE = ".$_COOKIE["ccode"]."","HCODE");
		  	$table = 'client_tb';
		  	
		  	$params = array($_COOKIE['ccode'], $gethash, $table, $currDate);
			$query = "INSERT INTO delist_tb (CCODE, HCODE, DTABLE, DATE_CREATED) VALUES (?,?,?,?)";
            $insert_payment = $db->InsertRecords($query, $params);
		}

	   $query = $db->deleRecord("DELETE FROM client_tb where CODE IN ($ids) AND CCODE = ".$_COOKIE["ccode"]."");

		if($query=="0"){
	        echo 'success';
		}else{
			echo 'failed';
        		}
		    }
	    }
    }
?>