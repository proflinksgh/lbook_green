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
		$idFullnameupdate  = $db->cleanInput($idFullnameupdate);
		$idUserContactupdate = $db->cleanInput($idUserContactupdate);
		$idUsernameupdate = $db->cleanInput($idUsernameupdate);
		$role = $db->cleanInput($role);
		$currDate = date('Y-m-d');
		$idDate = $currDate." ".date("h:i:sa");
		$name = explode(" ", $idFullnameupdate);
	
		if(isset($idPasswordupdate)){
			$idPasswordupdate = $db->password($db->cleanInput($idPasswordupdate));
			$update_ = $db->updateFunction("UPDATE admin_tb SET USERNAME = '$idUsernameupdate', PASSWORD = '$idPasswordupdate', SURNAME = '$name[0]', OTHERNAME = '$name[1]', CONTACT = '$idUserContactupdate', USER_ROLE = $role, DATE_MODIFIED = '$idDate' where CODE = $id AND CCODE = ".$_COOKIE["ccode"]."");
		}else{
		  $update_ = $db->updateFunction("UPDATE admin_tb SET USERNAME = '$idUsernameupdate', SURNAME = '$name[0]', OTHERNAME = '$name[1]', CONTACT = '$idUserContactupdate', USER_ROLE = $role, DATE_MODIFIED = '$idDate' where CODE = $id AND CCODE = ".$_COOKIE["ccode"]."");	
		}

		if($update_=="0"){
			echo json_encode(array('status'=>'success', 'message'=>'User Updated succesfully'));
		}else{
		  echo json_encode(array('status'=>'failed', 'message'=>'Failed to Update succesfully! Try again'));
		}
	}
}
?>