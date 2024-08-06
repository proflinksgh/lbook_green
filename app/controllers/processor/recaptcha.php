<?php
class amwork_controller extends route
{
	private $user_tag;
	private $user_initing;
	private $date_composer;
	private $id, $company, $category, $city, $contact, $status, $code, $conn;


     private $secret_key = '6Lfz-N4ZAAAAAOi0sFWjOvQD3NiPwDV-UOKV3Op9';

	  function __construct()
	{
	    $this->user_tag = $this->model('master_class');
		$this->user_initing = $this->model('extend_function');
		$this->date_composer = $this->user_initing->timer;
		$this->conn = new master_class();
	}
	
	
	public function index()
	{
	     extract($_POST);
        	$db = $this->user_initing;
        	$token = $db->cleanInput($token);
	    
	    $Return = $this->recap($token);
	     echo json_encode($Return);
	}
	
       function recap($SecretKey)
		{
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->secret_key."&response={$SecretKey}");
            $Return = json_decode($Response);
            return $Return;
           
		}
	}

?>