<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $surname;
	private $username;
	private $othername;
	private $contact;
	private $city;
	private $id;
	private $role;
	private $amount;
    private $code;
    private $details;
    private $receipient;

    	function __construct()
    	{
    	    $this->user_tag = $this->model('master_class');
    
    		$this->user_initing = $this->model('extend_function');
    
    		$this->date_composer = $this->user_initing->timer;
    
    		$this->conn = new master_class();
    	}

    
        public function index()
    	{
    		$this->update();
    	}


	  function update()
	   {
		extract($_POST);
		$db = $this->user_initing;
		$id = $db->cleanInput($id);
		$firstname = $db->cleanInput($firstname);
		$lastname = $db->cleanInput($lastname);
		$othername = $db->cleanInput($othername);
		$idClientDob= $db->cleanInput($idClientDob);
		$idClientContact = $db->cleanInput($idClientContact);
		$idNextofKin = $db->cleanInput($idNextofKin);
		$idNextofKinContact = $db->cleanInput($idNextofKinContact);
		$idCity = $db->cleanInput($idCity);
		$idArea= $db->cleanInput($idArea);
		$path = $_POST["image"];
		$idOccupation= $db->cleanInput($idOccupation);

		if(isset($_POST["image"])){
		  $path = $_POST["image"];
          $update_ = $db->updateFunction("UPDATE client_tb SET FIRSTNAME='$firstname', LASTNAME='$lastname', OTHERNAME='$othername', DOB = '$idClientDob', CONTACT_1 = '$idClientContact', NEXT_OF_KIN = '$idNextofKin', NEXT_OF_KIN_CONTACT = '$idNextofKinContact', CITY= '$idCity', AREA = '$idArea', OCCUPATION = '$idOccupation', IMAGE_PATH='$path' where CODE = '$id' AND CCODE = ".$_COOKIE["ccode"]."");
        
            if($update_ == "0"){
                			echo json_encode(array('status'=>'success', 'message'=>'Record updated successfully 2', "file"=>$path, "id"=>$id));
                			unset($_SESSION["filename"]);
                		}else{
                		  echo json_encode(array('status'=>'failed', 'message'=>'Failed updating record'));
                } 
		}else{
		 	    $update_ = $db->updateFunction("UPDATE client_tb SET FIRSTNAME='$firstname', LASTNAME='$lastname', OTHERNAME='$othername', DOB = '$idClientDob', CONTACT_1 = '$idClientContact', NEXT_OF_KIN = '$idNextofKin', NEXT_OF_KIN_CONTACT = '$idNextofKinContact', CITY= '$idCity', AREA = '$idArea', OCCUPATION = '$idOccupation' where CODE = '$id' AND CCODE = ".$_COOKIE["ccode"]."");
        		if($update_=="0"){
        			echo json_encode(array('status'=>'success', 'message'=>'Record updated successfully'));
        		}else{
        		  echo json_encode(array('status'=>'failed', 'message'=>'Failed updating record'));
        	} 
         }
	}
}

?>